<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;

class WilayahController extends Controller
{
    //
    public function getProvinsi()
    {
        $data = Provinsi::all();
        return response()->json($data);
    }
    public function getKabupaten(Request $request)
    {
        if (is_numeric($request->provinsi_id)) {
            $data = Kabupaten::where('provinsi_id', $request->provinsi_id)->orderBy('nama')->get();
            $html[] = '<option value="0">- Please Select -</option>';
            foreach ($data as $key => $value) {
                $html[] = '<option value="'.$value->id.'">'.$value->nama.'</option>';
            }
            if (count($html)>0) {
                return $html;
            }
        }
        return '<option value="0">- Data Empty -</option>';
    }
    public function getKecamatan(Request $request)
    {
        if (is_numeric($request->kabupaten_id)) {
            $data = Kecamatan::where('kabupaten_id', $request->kabupaten_id)->orderBy('nama')->get();
            $html[] = '<option value="0">- Please Select -</option>';
            foreach ($data as $key => $value) {
                $html[] = '<option value="'.$value->id.'">'.$value->nama.'</option>';
            }
            if (count($html)>0) {
                return $html;
            }
        }
        return '<option value="0">- Data Empty -</option>';
    }

    public function getAllKabupaten(Request $request)
    {
        if (is_numeric($request->provinsi_id)) {
            $data = Kabupaten::where('provinsi_id', $request->provinsi_id)->orderBy('nama')->get();
            $html[] = '<option value="">- Semua -</option>';
            foreach ($data as $key => $value) {
                $html[] = '<option value="'.$value->id.'">'.$value->nama.'</option>';
            }
            if (count($html)>0) {
                return $html;
            }
        }
        return '<option value="">- Data Empty -</option>';
    }
}