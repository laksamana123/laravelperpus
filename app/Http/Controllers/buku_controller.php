<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\buku_model;
use Illuminate\Support\Facades\Validator;
use Auth;

class buku_controller extends Controller
{
    public function store(Request $req){
        $validator = Validator::make($req->all(),
        [
            'judul' => 'required',
            'penerbit' => 'required',
            'pengarang' => 'required',
            'foto' => 'required'
        ]);
        if($validator->fails()){
          return Response()->json($validator->errors());
        }
    
        $simpan =  buku_model::create([
          'judul' => $req->judul,
          'penerbit' => $req->penerbit,
          'pengarang' => $req->pengarang,
          'foto' => $req->foto
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
            'judul' => 'required',
            'penerbit' => 'required',
            'pengarang' => 'required',
            'foto' => 'required'
        ]);
        if($validator->fails()){
          return Response()->json($validator->errors());
        }
    
        $ubah = buku_model::where('id', $id)->update([
          'judul' => $req->judul,
          'penerbit' => $req->penerbit,
          'pengarang' => $req->pengarang,
          'foto' => $req->foto
        ]);
        if($ubah){
          return Response()->json(['status' => 1]);
        } else {
          return Response()->json(['status' => 0]);
        }
      }
    
    public function destroy($id){
        $hapus = buku_model::where('id', $id)->delete();
        if($hapus){
          return Response()->json(['status' => 1]);
        } else {
          return Response()->json(['status' => 0]);
        }
      }

    public function tampil_buku(){
        $data_buku = buku_model::get();
        $count = $data_buku->count();
        $arr_data = array();
        foreach ($data_buku as $dt_bk){
          $arr_data[] = array(
          'judul' => $dt_bk->judul,
          'penerbit' => $dt_bk->penerbit,
          'pengarang' => $dt_bk->pengarang,
          'foto' => $dt_bk->foto
          );
        }
        return Response()->json(compact('count','arr_data'));
      }
}
