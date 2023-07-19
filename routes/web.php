<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\PengampuController;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::prefix('/sekolah')->group(function (){

// });

// //route ke view
// Route::get('/view-app', function () {
//     return view('app');
// });
Route::get('/',[App\Http\Controllers\AuthController::class, 'login'])->name('auth.login');
Route::post('/registrasi', [AuthController::class, 'registrasi'])->name('auth.registrasi');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/guru', [GuruController::class, 'index'])->name('guru.index');
//route form tambah data
Route::get('/guru/create', [GuruController::class, 'create'])->name('guru.create');
//route form simpan data
Route::get('/guru/{id}/edit', [GuruController::class, 'edit'])->name('guru.edit');
//route form simpan data
Route::post('/guru/{id}/update', [GuruController::class, 'update'])->name('guru.update');
//route form simpan data
Route::post('/guru/store', [GuruController::class, 'store'])->name('guru.store');
//Route::resource('kelas.index',KelasController::class);
Route::get('/guru/{id}/delete', [GuruController ::class, 'destroy'])->name('guru.delete');



Route::get('/matapelajaran', [MataPelajaranController::class, 'index'])->name('matapelajaran.index');
//route form tambah data
Route::get('/matapelajaran/create', [MataPelajaranController::class, 'create'])->name('matapelajaran.create');
//route form simpan data
Route::get('/matapelajaran/{id}/edit', [MataPelajaranController::class, 'edit'])->name('matapelajaran.edit');
//route form simpan data
Route::post('/matapelajaran/{id}/update', [MataPelajaranController::class, 'update'])->name('matapelajaran.update');
//route form simpan data
Route::post('/matapelajaran/store', [MataPelajaranController::class, 'store'])->name('matapelajaran.store');
//Route::resource('kelas.index',KelasController::class);
Route::get('/matapelajaran/{id}/delete', [GuruController ::class, 'destroy'])->name('guru.delete');



Route::get('/pengampu', [PengampuController::class, 'index'])->name('pengampu.index');
//route form tambah data
Route::get('/pengampu/create', [PengampuController::class, 'create'])->name('pengampu.create');
//route form simpan data
Route::get('/pengampu/{id}/edit', [PengampuController::class, 'edit'])->name('pengampu.edit');
//route form simpan data
Route::post('/pengampu/{id}/update', [PengampuController::class, 'update'])->name('pengampu.update');
//route form simpan data
Route::post('/pengampu/store', [PengampuController::class, 'store'])->name('pengampu.store');
//Route::resource('kelas.index',KelasController::class);
Route::get('/pengampu/{id}/delete', [PengampuController ::class, 'destroy'])->name('pengampu.delete');
