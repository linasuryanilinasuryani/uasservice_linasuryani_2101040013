<?php
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\PengampuController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('customer', [\App\Http\Controllers\Api\CustController::class,'index']);
 //Route::post('customer/post', [\App\Http\Controllers\Api\CustController::class,'store']);


Route::group(['prefix' => 'v1'], function() {
    Route::get('guru', [GuruController::class,'index'])->middleware('auth:sanctum');
   // Route::get('guru', [PengampuController::class,'show']);
    Route::post('guru/{id}', [GuruController::class,'store'])->middleware('auth:sanctum');
    Route::patch('guru/{id}', [GuruController::class, 'update'])->middleware('auth:sanctum');
    Route::delete('guru/{id}', [GuruController::class, 'delete'])->middleware('auth:sanctum');

    Route::get('matapelajaran', [MataPelajaranController::class,'index'])->middleware('auth:sanctum');
    Route::post('matapelajaran/{id}', [MataPelajaranController::class,'store'])->middleware('auth:sanctum');
    Route::patch('matapelajaran/{id}', [MataPelajaranController::class, 'update'])->middleware('auth:sanctum');
    Route::delete('matapelajaran/{id}', [MataPelajaranController::class, 'delete'])->middleware('auth:sanctum');

    Route::get('pengampu', [PengampuController::class,'index'])->middleware('auth:sanctum');
    Route::post('pengampu/{id}', [PengampuController::class,'store'])->middleware('auth:sanctum');
    Route::patch('pengampu/{id}', [PengampuController::class, 'update'])->middleware('auth:sanctum');
    Route::delete('pengampu/{id}', [PengampuController::class, 'delete'])->middleware('auth:sanctum');



});
Route::post('/register', [AuthController::class, 'registrasi']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
