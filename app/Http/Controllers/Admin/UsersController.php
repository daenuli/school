<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Kris\LaravelFormBuilder\FormBuilder;
use DataTables;
use Form;
use App\Forms\UserForm;
use Illuminate\Support\Facades\Gate;

class UsersController extends Controller
{
    private $folder = 'admin.users';
    private $uri = 'users';
    private $title = 'User';

    public function __construct()
    {
        $this->middleware(function($request, $next){
            if(Gate::allows('manage-users')) return $next($request);
            abort(403);
        });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = $this->title;
        $data['create'] = route($this->uri.'.create');
        return view($this->folder.'.index',$data);
    }
    public function data()

    {
        $users = User::all();
        return DataTables::of($users)
        ->editColumn('role', function ($index) {
            if($index->role == 1) {
                return '<span class="btn btn-sm btn-success">Admin</span>';
            } elseif ($index->role == 2){
                return '<span class="btn btn-sm btn-primary">Musyrif Tahfizh</span>';
            } elseif ($index->role == 3){
                return '<span class="btn btn-sm btn-info">Asatidz/ah</span>';
            }
             else {
                return '<span class="btn btn-sm btn-warning">Staff Keuangan</span>';
            }
        })
        ->addColumn('action', function ($index) {
            return '<form action="'. route($this->uri.'.destroy', $index->id) .'" method="POST" class="text-center">
            <a href="' . route($this->uri.'.edit', $index->id) . '" class="btn btn-sm btn-success"><i class="material-icons">create</i> Edit </a>
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="'. csrf_token() .'">
            <button type="submit" class="btn btn-sm btn-danger btn-label" onclick="javascript:return confirm(\'Apakah anda yakin ingin menghapus data ini?\')"><i class="material-icons">delete</i> Hapus </button>
            </form>
            ';
        })
        ->rawColumns(['id', 'role','action'])
        ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder)
    {
        $data['title'] = $this->title;
        $data['form'] = $formBuilder->create('App\Forms\UserForm', [
            'method' => 'POST',
            'url' => route($this->uri.'.store')
        ]);
        $data['back'] = route($this->uri.'.index');
        return view($this->folder.'.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users,email',
            'password' => 'required|min:5'
        ]);
        $request->merge([
            'password' => bcrypt($request->password)
        ]);
        $data = new User;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->role = $request->role;
        $data->save();

        return redirect(route($this->uri.'.index'))->with('Success',trans('Data anda telah berhasil di Input !'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(FormBuilder $formBuilder, $id)
    {
        $data['title'] = $this->title;
        $tbl = User::find($id);
        $data['form'] = $formBuilder->create('App\Forms\UserForm', [
            'method' => 'PUT',
            'model' => $tbl,
            'url' => route($this->uri.'.update', $id)
        ])
        ->modify('role', 'choice', [
            'selected' => null
        ])
        ->modify('password', 'password', [
            'value' => '',
            'attr' => ['data-validation' => '']
        ]);
        $data['back'] = route($this->uri.'.index');
        return view($this->folder.'.create', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'unique:users,email,'.$id,
        ]);
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        if(empty($request->password)){
            unset($request['password']);
        } else {
            $data->password = bcrypt($request->password);
        }
        $data->role = $request->role;
        $data->save();

        return redirect(route($this->uri.'.index'))->with('Success',trans('Data anda telah berhasil di Edit !'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect(route($this->uri.'.index'))->with('Success',trans('Data anda telah berhasil di Hapus !'));
    }
}
