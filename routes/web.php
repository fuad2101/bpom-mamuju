<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pegawaiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/surat',[App\Http\Controllers\HomeController::class,'surat']);
Route::get('/nodin',[App\Http\Controllers\HomeController::class,'nodin']);


Route::get('/pegawai',[pegawaiController::class,'index'])->name('pegawai.index');
Route::get('/pegawai/create',[pegawaiController::class,'create'])->name('pegawai.create');
Route::post('/pegawai/create',[pegawaiController::class,'store'])->name('pegawai.store');
