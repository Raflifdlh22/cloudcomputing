<?php

namespace App\Http\Controllers;

use App\Models\Inventaris_restoran;
use App\Models\Posisi_pekerjaan;
use APP\models\user;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Psy\TabCompletion\Matcher\FunctionsMatcher;
use App\Http\Controllers\HomeController;


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


Route::get('/',[HomeController::class, 'index']);

Route::get('template', Function(){
    return view ('template.master');
});

Route::get('/greeting', function () {
    return view('greeting');
});

Route::middleware(['auth'])->group(function(){
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user/simpan-data', [UserController::class, 'store']);
Route::get('/user/edit/{id}', [UserController::class, 'edit']);
Route::post('/user/update/{id}', [UserController::class, 'update']);
Route::get('/user/delete/{id}', [UserController::class, 'delete']);

Route::get('/menu', [MenuController::class, 'index']);
Route::get('/menu/create', [MenuController::class, 'create']);
Route::post('/menu/simpan-data', [MenuController::class, 'store']);
Route::get('/menu/edit/{id}', [MenuController::class, 'edit']);
Route::post('/menu/update/{id}', [MenuController::class, 'update']);
Route::get('/menu/delete/{id}', [MenuController::class, 'delete']);

Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/create', [PegawaiController::class, 'create']);
Route::post('/pegawai/simpan-data', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update/{id}', [PegawaiController::class, 'update']);
Route::get('/pegawai/delete/{id}', [PegawaiController::class, 'delete']);

Route::get('/posisi', [Posisi_pekerjaanController::class, 'index']);
Route::get('/posisi/create', [Posisi_pekerjaanController::class, 'create']);
Route::post('/posisi/simpan-data', [Posisi_pekerjaanController::class, 'store']);
Route::get('/posisi/edit/{id}', [Posisi_pekerjaanController::class, 'edit']);
Route::post('/posisi/update/{id}', [Posisi_pekerjaanController::class, 'update']);
Route::get('/posisi/delete/{id}', [Posisi_pekerjaanController::class, 'delete']);

Route::get('/kategori_menu', [Kategori_menuController::class, 'index']);
Route::get('/kategori_menu/create', [Kategori_menuController::class, 'create']);
Route::post('/kategori_menu/simpan-data', [kategori_menuController::class, 'store']);
Route::get('/kategori_menu/edit/{id}', [Kategori_menuController::class, 'edit']);
Route::post('/kategori_menu/update/{id}', [Kategori_menuController::class, 'update']);
Route::get('/kategori_menu/delete/{id}', [Kategori_menuController::class, 'delete']);

Route::get('/inventaris', [Inventaris_restoranController::class, 'index']);
Route::get('/inventaris/create', [Inventaris_restoranController::class, 'create']);
Route::post('/inventaris/simpan-data', [Inventaris_restoranController::class, 'store']);
Route::get('/inventaris/edit/{id}', [Inventaris_restoranController::class, 'edit']);
Route::post('/inventaris/update/{id}', [Inventaris_restoranController::class, 'update']);
Route::get('/inventaris/delete/{id}', [Inventaris_restoranController::class, 'delete']);
});
Route::get('/login', [Auth\LoginController::class, 'index'])->name('login');
Route::post('/login/proses', [Auth\LoginController::class, 'login']);
Route::get('/logout', [Auth\LoginController::class, 'logout']);

Route::get('/register', [Auth\RegisterController::class, 'index']);
Route::post('/register/proses', [Auth\RegisterController::class, 'register']);