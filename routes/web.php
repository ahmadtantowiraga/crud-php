<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/penduduk',[PendudukController::class, 'index'])->name('penduduk');
Route::get('/tambahpenduduk',[PendudukController::class, 'tambahpenduduk'])->name('tambahpenduduk');
Route::post('/insertpenduduk',[PendudukController::class, 'insertpenduduk'])->name('insertpenduduk');
Route::get('/tampilkandata/{id}',[PendudukController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[PendudukController::class, 'updatedata'])->name('updatedata');
Route::get('/delete/{id}',[PendudukController::class, 'delete'])->name('delete');
Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/loginuser',[LoginController::class, 'loginuser'])->name('loginuser');
Route::get('/register',[LoginController::class, 'register'])->name('register');
Route::post('/registeruser',[LoginController::class, 'registeruser'])->name('registeruser');


