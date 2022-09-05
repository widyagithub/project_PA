<?php

use App\Models\Warga;
use App\Models\Laporan;
use App\Models\Kriteria;
// use App\Models\Laporan;
use App\Models\Datasurvey;
use App\Models\Subkriteria;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\DatasurveyController;
use App\Http\Controllers\RekomendasiController;
use App\Http\Controllers\SubkriteriaController;


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
    $jumlahwarga = Warga::count();
    $jumlahkriteria = Kriteria::count();
    $jumlahlaporan = Datasurvey::where('sts_rekomendasi','=','1')->count();
    // $jumlahwarganone = Warga::where('status', 'none')->count();


    return view('welcome', compact('jumlahwarga', 'jumlahkriteria', 'jumlahlaporan'));
    // return view('welcome', compact('jumlahwarga'));
})->middleware('auth');

Route::get('/warga', [WargaController::class, 'index'])->name('warga')->middleware('auth');

Route::get('/tambahwarga', [WargaController::class, 'tambahwarga'])->name('tambahwarga');
Route::post('/insertdata', [WargaController::class, 'insertdata'])->name('insertdata');

Route::get('/detailsdata/{id}', [WargaController::class, 'detailsdata'])->name('detailsdata');
Route::get('/tampilkandata/{id}', [WargaController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [WargaController::class, 'updatedata'])->name('updatedata');

Route::get('/delete_warga/{id}', [WargaController::class, 'delete_warga'])->name('delete_warga');

Route::get('/kriteria', [KriteriaController::class, 'index'])->name('kriteria');
Route::get('/tambahkriteria', [KriteriaController::class, 'tambahkriteria'])->name('tambahkriteria');
Route::post('/insertkriteria', [KriteriaController::class, 'insertkriteria'])->name('insertkriteria');
Route::get('/delete_kriteria/{id}', [KriteriaController::class, 'delete_kriteria'])->name('delete_kriteria');
Route::get('/tampilkankriteria/{id}', [KriteriaController::class, 'tampilkankriteria'])->name('tampilkankriteria');
Route::post('/updatekriteria/{id}', [KriteriaController::class, 'updatekriteria'])->name('updatekriteria');

Route::get('/subkriteria', [SubkriteriaController::class, 'index'])->name('subkriteria');
Route::get('/tambahsubkriteria', [SubkriteriaController::class, 'tambahsubkriteria'])->name('tambahsubkriteria');
Route::post('/insertsubkriteria', [SubkriteriaController::class, 'insertsubkriteria'])->name('insertsubkriteria');
Route::get('/delete_subkriteria/{id}', [SubkriteriaController::class, 'delete_subkriteria'])->name('delete_subkriteria');
Route::get('/tampilkansubkriteria/{id}', [SubkriteriaController::class, 'tampilkansubkriteria'])->name('tampilkansubkriteria');
Route::post('/updatesubkriteria/{id}', [SubkriteriaController::class, 'updatesubkriteria'])->name('updatesubkriteria');

Route::get('/datasurvey', [DatasurveyController::class, 'index'])->name('datasurvey');

Route::get('/tampilkandatasurvey/{id}', [DatasurveyController::class, 'tampilkandatasurvey'])->name('tampilkandatasurvey');

Route::get('/tambahsurvey/{id}', [WargaController::class, 'tambahsurvey'])->name('tambahsurvey');

Route::post('/insertsurvey/{id}', [WargaController::class, 'insertsurvey'])->name('insertsurvey');

Route::post('/edit_survey/{id}', [DatasurveyController::class, 'edit_survey'])->name('edit_survey');
// Route::get('/detailwarga/{id}', [DatasurveyController::class, 'detailwarga'])->name('detailwarga');
// Route::get('/pilihkriteria', [DatasurveyController::class, 'pilihkriteri'])->name('pilihkriteria');

Route::get('/rekomendasi', [RekomendasiController::class, 'index'])->name('rekomendasi');
Route::get('/approve/{id}', [RekomendasiController::class, 'approve'])->name('approve');
Route::get('/cancel/{id}', [RekomendasiController::class, 'cancel'])->name('cancel');

Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan');
Route::get('/laporan_all', [LaporanController::class, 'laporan_all'])->name('laporan_all');
Route::get('/laporan_detail/{id}', [LaporanController::class, 'laporan_detail'])->name('laporan_detail');
Route::get('/perhitungan', [LaporanController::class, 'perhitungan'])->name('perhitungan');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');