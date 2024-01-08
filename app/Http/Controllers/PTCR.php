<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\prodi;

class PTCR extends Controller
{
    public function index (Request $request){
        $data = prodi::All();
        $nama='';
        if (count($data)>0){
            $nama =$data[0]->namaProdi;
        }
        return view('prodi.index',[
            "nama" =>$nama,
        ]);
    }
    public function update(Request $request){
        DB::beginTransaction();
        prodi::where('id','>',0) ->delete();
        $val["namaProdi"] = $request->txt_prodi;
        prodi::create($val);
        DB::commit();
       return redirect('/prodi');
}
}