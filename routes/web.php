<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PeminjamanController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [HomeController::class, 'index']);

//ROUTES PETUGAS
Route::get('/petugas', [PetugasController::class, 'index'])->name('petugas');
Route::get('/petugas/detail/{id_petugas}', [PetugasController::class, 'detail']);
Route::get('/petugas/add',[PetugasController::class, 'add']);
Route::post('/petugas/insert',[PetugasController::class, 'insert']);
Route::get('/petugas/edit/{id_petugas}',[PetugasController::class, 'edit']);
Route::post('/petugas/update/{id_petugas}',[PetugasController::class, 'update']);
Route::get('/petugas/delete/{id_petugas}',[PetugasController::class, 'delete']);

//ROUTES USER-ANGGOTA
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/user/detail/{id_user}', [UserController::class, 'detail']);
Route::get('/user/add',[UserController::class, 'add']);
Route::post('/user/insert',[UserController::class, 'insert']);
Route::get('/user/edit/{id_user}',[UserController::class, 'edit']);
Route::post('/user/update/{id_user}',[UserController::class, 'update']);
Route::get('/user/delete/{id_user}',[UserController::class, 'delete']);

//ROUTES BUKU
Route::get('/buku', [BukuController::class, 'index'])->name('buku');
Route::get('/buku/detail/{id_buku}', [BukuController::class, 'detail']);
Route::get('/buku/add',[BukuController::class, 'add']);
Route::post('/buku/insert',[BukuController::class, 'insert']);
Route::get('/buku/edit/{id_buku}',[BukuController::class, 'edit']);
Route::post('/buku/update/{id_buku}',[BukuController::class, 'update']);
Route::get('/buku/delete/{id_buku}',[BukuController::class, 'delete']);

//ROUTES PEMINJAMAN
Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman');
Route::get('/buku/add',[BukuController::class, 'add']);
Route::post('/buku/insert',[BukuController::class, 'insert']);
Route::get('/buku/edit/{id_buku}',[BukuController::class, 'edit']);
Route::post('/buku/update/{id_buku}',[BukuController::class, 'update']);
Route::get('/buku/delete/{id_buku}',[BukuController::class, 'delete']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
