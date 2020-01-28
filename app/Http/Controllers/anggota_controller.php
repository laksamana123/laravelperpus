<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\anggota_model;
use Illuminate\Support\Facades\Validator;
use Auth;

class anggota_controller extends Controller
{
    public function store(Request $req){
        $validator = Validator::make($req->all(),
        [
            'nama_anggota' => 'required',
            'alamat' => 'required',
            'telp' => 'required'
        ]);
        if($validator->fails()){
          return Response()->json($validator->errors());
        }
    
        $simpan = anggota_model::create([
          'nama_anggota' => $req->nama_anggota,
          'alamat' => $req->alamat,
          'telp' => $req->telp
        ]);
        if($simpan){
          return Response()->json(['status' => 1]);
        } else {
          return Response()->json(['status' => 0]);
        }
      }

    public function update($id, Request $req){
        $validator = Validator::make($req->all(),
        [
            'nama_anggota' => 'required',
            'alamat' => 'required',
            'telp' => 'required'
        ]);
        if($validator->fails()){
          return Response()->json($validator->errors());
        }
    
        $ubah = anggota_model::where('id', $id)->update([
          'nama_anggota' => $req->nama_anggota,
          'alamat' => $req->alamat,
          'telp' => $req->telp
        ]);
        if($ubah){
          return Response()->json(['status' => 1]);
        } else {
          return Response()->json(['status' => 0]);
        }
      }

    public function destroy($id){
        $hapus = anggota_model::where('id', $id)->delete();
        if($hapus){
          return Response()->json(['status' => 1]);
        } else {
          return Response()->json(['status' => 0]);
        }
      }

      public function tampil_anggota(){
        $data_anggota = anggota_model::get();
        $count = $data_anggota->count();
        $arr_data = array();
        foreach ($data_anggota as $dt_agt){
          $arr_data[] = array(
          'nama_anggota' => $dt_agt->nma_anggota,
          'alamat' => $dt_agt->alamat,
          'telp' => $dt_agt->telp
          );
        }
        return Response()->json(compact('count','arr_data'));
      }
}
