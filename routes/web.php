<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\kearsipanController;
use App\Http\Controllers\vitalController;

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

Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/sign-up',function(){
    return view('auth/register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth', 'verified'])->name('home');
Route::prefix('surat')->group(function(){
    Route::get('/st',function(){
        return view('pages.persuratan.template.st');
    });
    Route::get('/nodin',function(){
        return view('pages.persuratan.template.nodin');
    });
    Route::get('/pjb',function(){
        return view('pages.bpom.persuratan.pjb');
    });
});


Route::get('/pegawai',[pegawaiController::class,'index'])->name('pegawai.index');
Route::get('/pegawai/create',[pegawaiController::class,'create'])->name('pegawai.create');
Route::post('/pegawai/create',[pegawaiController::class,'store'])->name('pegawai.store');

//Route::post('/phpword',[SuratController::class,'create']);

Route::get('/vital',[vitalController::class,'index']);
Route::get('/vital/create',[vitalController::class,'create']);

Route::controller(SuratController::class)->group(function(){
    Route::post('/exp/pdf','pdf');
    Route::post('/exp/docx','docx');
    Route::post('/exp/xls','xls');
});

