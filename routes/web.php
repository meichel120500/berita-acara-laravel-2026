<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PerhitunganController;
use Illuminate\Support\Facades\Route;


//get = melihat data atau menampilkannya
//pos = mengirim data 
//put/patch = merubah atau mengedit data
//delete = menghapus data
Route::get('navbar', function(){
    return view('inc.navbar');
});
//Tampilan form perhitungan
Route::get('perhitungan',function(){
    return view('perhitungan.index');
})->name('perhitungan.index');

//Tampilan form Luas Permukaan Kubus
Route::get('luaspermukaankubus',[App\Http\Controllers\PerhitunganController::class,'index'])->name('luaspermukaankubus.index');

Route::post('perhitungan',[PerhitunganController::class,'store'])->name('perhitungan.store');

Route::post('luaspermukaankubus',[PerhitunganController::class,'storeLpKubus'])->name('luaspermukaankubus.store');

// Volume Kubus
Route::get('volumekubus',[App\Http\Controllers\PerhitunganController::class,'indexV'])->name('volumekubus.index');
Route::post('volumekubus',[PerhitunganController::class,'storeVKubus'])->name('volumekubus.store');

// Luas Permukaan Tabung
Route::get('luaspermukaantabung',[App\Http\Controllers\PerhitunganController::class,'indexT'])->name('luaspermukaantabung.index');
Route::post('luaspermukaantabung',[PerhitunganController::class,'storeLpTabung'])->name('luaspermukaantabung.store');

//Volume Tabung 
Route::get('volumetabung',[App\Http\Controllers\PerhitunganController::class,'indexK'])->name('volumetabung.index');
Route::post('volumetabung',[PerhitunganController::class,'storeVT'])->name('volumetabung.store');




Route::get('volumelimas',[App\Http\Controllers\VolumeLimasController::class,'index'])->name('volumelimas.index');

Route::get('volumelimas/create',[App\Http\Controllers\VolumeLimasController::class,'create'])->name('volumelimas.create');
Route::post('volumelimas/store',[App\Http\Controllers\VolumeLimasController::class,'store'])->name('volumelimas.store');
Route::get('volumelimas/edit/{id}',[App\Http\Controllers\VolumeLimasController::class,'edit'])->name('volumelimas.edit');
Route::put('volumelimas/update/{id}',[App\Http\Controllers\VolumeLimasController::class,'update'])->name('volumelimas.update');
Route::delete('volumelimas/delete/{id}',[App\Http\Controllers\VolumeLimasController::class,'destroy'])->name('volumelimas.destroy');


Route::get('pesertapelatihan',[App\Http\Controllers\PesertaPelatihanController::class,'index'])->name('pesertapelatihan.index');
Route::get('pesertapelatihan/create',[App\Http\Controllers\PesertaPelatihanController::class,'create'])->name('pesertapelatihan.create');
Route::post('pesertapelatihan/store',[App\Http\Controllers\PesertaPelatihanController::class,'store'])->name('pesertapelatihan.store');
Route::get('pesertapelatihan/edit/{id}',[App\Http\Controllers\PesertaPelatihanController::class,'edit'])->name('pesertapelatihan.edit');
Route::put('pesertapelatihan/update/{id}',[App\Http\Controllers\PesertaPelatihanController::class,'update'])->name('pesertapelatihan.update');
Route::delete('pesertapelatihan/delete/{id}',[App\Http\Controllers\PesertaPelatihanController::class,'destroy'])->name('pesertapelatihan.destroy');

// Route Get 
Route::get('belajar-laravel',[\App\Http\Controllers\BelajarController::class,'index']);
Route::get('siswa',[\App\Http\Controllers\BelajarController::class,'getSiswa']);

// Route Post
Route::get('create',[\App\Http\Controllers\BelajarController::class,'create'])->name('siswa.create');
Route::post('store',[\App\Http\Controllers\BelajarController::class,'store'])->name('siswa.store');

Route::get('/', [\App\Http\Controllers\LoginController::class,'index']);
Route::post('action-login', [\App\Http\Controllers\LoginController::class,'actionLogin'])->name('action-login');
Route::post('logout', [\App\Http\Controllers\LoginController::class,'logout'])->name('logout');
//dashboard
Route::get('dashboard', [\App\Http\Controllers\DashboardController::class,'index']);