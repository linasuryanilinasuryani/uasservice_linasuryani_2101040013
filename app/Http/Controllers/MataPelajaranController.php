<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\MataPelajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MataPelajaranController extends Controller
{
 public function index(){
   // $data=Category::all();
   $data=MataPelajaran::all();
    return response()->json($data,200);
 }
 //show data cara 1
//  public function show(Customer $id){

//     return response()->json($id,200);
//  }

 //show data cara 2
 public function show($id){

   $data = MataPelajaran::where('id', $id)->first();
   if (empty($data)){
    return response()->json([
        'pesan' => 'Data Tidak Ditemukan',
        'data' => null
    ], 404);
   }
    return response()->json([
        'pesan' => 'Data Ditemukan',
        'data' => $data
    ], 200);
 }
 public function store(Request $request)
 {
    $validate = Validator::make($request->all(), [
        'code_matapelajaran' => 'required',
         'nama' => 'required',
         'semester' => 'required',
         'sks' => 'required',
         'type' => 'required',



    ]);

    if ($validate->fails()){
        return $validate->errors();
    }


    $data=MataPelajaran::create($request->all());

     return response()->json([
        'pesan' => 'Data Berhasil Disimpan',
        'data' => $data
     ], 201);

     //
 }
 public function update(Request $request, $id)
 {
     $data = MataPelajaran::where('id', $id)->first();

     // cek data dengan id yg dikirimkan
     if (empty($data)) {
         return response()->json([
             'pesan' => 'Data tidak ditemukan',
             'data' => $data
         ], 404);
     }

     // proses validasi
     $validate = Validator::make($request->all(), [
         'code_matapelajaran' => 'required',
         'nama' => 'required',
         'semester' => 'required',
         'sks' => 'required',
         'type' => 'required',

     ]);

     if ($validate->fails()) {
         return $validate->errors();
     }

     // proses simpan perubahan data
     $data->update($request->all());

     return response()->json([
         'pesan' => 'Data berhasil di update',
         'data' => $data
     ], 201);
 }
 public function delete($id)
 {
     $data = MataPelajaran::where('id', $id)->first();
     // cek data dengan id yg dikirimkan
     if (empty($data)) {
         return response()->json([
             'pesan' => 'Data tidak ditemukan',
             'data' => $data
         ], 404);
     }

     $data->delete();

     return response()->json([
         'pesan' => 'Data berhasil di hapus',
         'data' => $data
     ], 200);
 }
    //
}
