<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LevelController;
use App\Models\User;
use Illuminate\Http\Request;
// use App\Http\Kernel;

Route::get('/user', [UserController::class,
'user']);

Route::get('/food-beverage', [CategoryController::class,
'foodBeverage']);

Route::get('/beauty-health', [CategoryController::class,
'beautyhealth']);

Route::get('/home-care', [CategoryController::class,
'homecare']);

Route::get('/baby-kid', [CategoryController::class,
'babykid']);

Route::get('/home', [HomeController::class,
'home']);

Route::get('/penjualan', [TransaksiController::class,
'transaksi']);

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

Route::get('/', function () {
    return view('welcome');
});

// SOAL PRAKTIKUM

Route::get('/user/{id}/{nama}', [UserController::class, 'User']);

Route::get('/user', [UserController::class,
'user']);

Route::get('/food-beverage', [CategoryController::class,
'foodBeverage']);

Route::get('/beauty-health', [CategoryController::class,
'beautyhealth']);

Route::get('/home-care', [CategoryController::class,
'homecare']);

Route::get('/baby-kid', [CategoryController::class,
'babykid']);

Route::get('/home', [HomeController::class,
'home']);

Route::get('/penjualan', [TransaksiController::class,
'transaksi']);

Route::get('/', function(){
    return view('welcome');
});


// PERTEMUAN 3
Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);


// PERTEMUAN 4

Route::get('/user/tambah', [UserController::class,'tambah']);
Route::post('/user/tambah_simpan', [UserController::class,'tambah_simpan']);
// Route::get('/user/ubah/',[UserController::class,'ubah']);
Route::get('/user/ubah/{id}', [UserController::class,'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class,'ubah_simpan']);
Route::get('/user/hapus/{id}', [UserController::class,'hapus']);

