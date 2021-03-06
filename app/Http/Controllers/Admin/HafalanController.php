<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Student;
use App\Models\Hafalan;
use App\Models\Surah;
use Kris\LaravelFormBuilder\FormBuilder;
use DataTables;
use Form;
use App\Forms\HafalanForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class HafalanController extends Controller
{
    protected $folder = 'admin.hafalan';
    protected $route = 'hafalan.';
    protected $rdr = '/hafalan';
    protected $title = 'Hafalan';
    protected $storeUrl = 'hafalan.store';

    public function __construct()
    {
        $this->middleware(function($request, $next){
            if (Gate::allows('manage-hafalans')) return $next($request);
            abort(403);
        });
    }

    public function index()
    {
        $data['create'] = route($this->route.'create');
        $data['title'] = $this->title;
        return view($this->folder.'.index', $data);
    }

    public function dbTables(Request $request)
    {
        $data = Hafalan::all();
        return Datatables::of($data)
            ->editColumn('user_id', function($index){
                return $index->user->name;
            })
            ->editColumn('student_id', function($index){
                return $index->student->name;
            })
            ->editColumn('surah_id', function($index){
                return $index->surah->name;
            })
            ->addColumn('action', function($index){
                $tag = Form::open(["url" => route($this->route.'destroy', $index->id), "method" => "PUT", "class" => "text-right"]);
                $tag .= "<a href=". route($this->route.'edit', $index->id) ." class='btn btn-success btn-sm'>Edit</a> ";
                $tag .= "<button type='submit' class='btn btn-danger btn-sm' onclick='javascript:return confirm(`Apakah anda yakin ingin menghapus data ini?`)'>Hapus</button>";
                $tag .= Form::close();
                return $tag;
            })
            ->rawColumns(['id', 'action'])
            ->make(true);
    }

    public function create(FormBuilder $formBuilder)
    {
        $data['title'] = $this->title;
        $data['back'] = route($this->route.'index');
        $data['form'] = $formBuilder->create(\App\Forms\HafalanForm::class, ['method'=>'POST', 'url'=> route($this->storeUrl)]);
        return view($this->folder.'.create', $data);
    }

    public function store(Request $request, FormBuilder $formBuilder)
    {
        $request->validate(['student_id' => 'required','juz' => 'required|max:2','note' => 'required']);
        $form = $formBuilder->create(\App\Forms\HafalanForm::class);
        if(!$form->isValid()){return redirect()->back()->withErrors($form->getErrors())->withInput();};
        $j = $request->juz;
        if ($j <= 30 && $j >= 1) {
            Hafalan::create([
                'user_id' => Auth::id(),
                'student_id' => $request->student_id,
                'surah_id' => $request->surah_id,
                'juz' => $j,
                'ayat_start' => $request->ayat_start,
                'ayat_end' => $request->ayat_end,
                'note' => $request->note
            ]);
            return redirect($this->rdr)->with('Success', trans('Data anda telah berhasil di Input !'));
        }else {
            return redirect()->back()->with('alert', 'Jumlah Hafalan maximal 30 Juz')->withInput();
        }
    }

    public function edit(FormBuilder $formBuilder, $id)
    {
        $data['form'] = $formBuilder->create(\App\Forms\HafalanForm::class, [
            'method'    => 'PUT',
            'url'       => route($this->route.'update', $id),
        ]);
        $data['h'] = Hafalan::findOrFail($id);
        $data['title'] = $this->title;
        $data['back'] = route($this->route.'index');
        return view($this->folder.'.edit', $data);
    }

    public function update(Request $request, $id, FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(\App\Forms\HafalanForm::class);
        if (!$form->isValid()){return redirect()->back()->withErrors($form->getErrors())->withInput();}
        $j = $request->juz;
        if ($j <= 30 && $j >= 1) {
            Hafalan::find($id)->update([
                'user_id' => Auth::id(),
                'student_id' => $request->student_id,
                'surah_id' => $request->surah_id,
                'juz' => $j,
                'ayat_start' => $request->ayat_start,
                'ayat_end' => $request->ayat_end,
                'note' => $request->note
            ]);
            return redirect($this->rdr)->with('Success', trans('Data anda telah berhasil di Ubah !'));
        }else {
            return redirect()->back()->with('alert', 'Jumlah Hafalan maximal 30 Juz')->withInput();
        }
    }

    public function destroy($id)
    {
        $h = Hafalan::findOrFail($id);
        $h->delete();
        return redirect($this->rdr)->with('Success', trans('Data anda telah berhasil di Hapus !'));
    }
}
