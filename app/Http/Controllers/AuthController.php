<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
 function registrasi(Request $request){
   $validate = Validator::make($request->all(), [
    'name' => 'required',
    'email' => 'required',
    'password' => 'required',
   ]);
   if ($validate->fails()){
    return $validate->errors();
   }
   $data = User::create([
    'name' => $request->name,
    'email' => $request->email,
    'password' => bcrypt($request->password)
   ]);

    return response()->json([
        'pesan' => 'Data berhasil disimpan',
        'data' => null
    ], 201);

 }
 function login(Request $request){
    $validate = Validator::make($request->all(), [

     'email' => 'required',
     'password' => 'required',
    ]);
    if ($validate->fails()){
     return $validate->errors();
    }
    $credentials = request(['email', 'password']);
    if (!auth()->attempt($credentials)){
        return response()->json([
            'pesan' => 'Username atau Password salah.!',
        ], 422);
    }
    $user = User::where('email', $request->email)->first();
    $token = $user->createToken('auth-token')->plainTextToken;

    return response()->json([
        'access-token' => $token
    ], 200);
  }
}
