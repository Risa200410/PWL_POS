<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LevelController;
use Illuminate\Http\Request;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegistrationController;




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

/* Route::get('/', function () {
    return view('welcome');
}); */


// PERTEMUAN 3
// Route::get('/level', [LevelController::class, 'index']);
// Route::get('/kategori', [KategoriController::class, 'index']);
// Route::get('/user', [UserController::class, 'index']);


// PERTEMUAN 4

/* Route::get('/user/tambah', [UserController::class,'tambah']);
Route::post('/user/tambah_simpan', [UserController::class,'tambah_simpan']);
Route::get('/user/ubah/',[UserController::class,'ubah']);
Route::get('/user/ubah/{id}', [UserController::class,'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class,'ubah_simpan']);
Route::get('/user/hapus/{id}', [UserController::class,'hapus']); */

// PERTEMUAN 7 & 8

Route::pattern('id', '[0-9]+'); // artinya ketika ada parameter {id}, maka harus berupa angka

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'postlogin']);
Route::get('logout', [AuthController::class, 'logout'])->middleware('auth');
Route::get('register', [RegistrationController::class, 'registration'])->name('register');
Route::post('register', [RegistrationController::class, 'store']);

Route::middleware(['auth'])->group(function () { // artinya semua route di dalam group ini harus login dulu

    Route::get('/', [WelcomeController::class, 'index']);

    Route::middleware(['authorize:ADM'])->group(function () {
        Route::get('/level', [LevelController::class, 'index']);          // menampilkan halaman awal level
        Route::post('/level/list', [LevelController::class, 'list']);      // menampilkan data level dalam bentuk json untuk datatables
        Route::get('/level/create', [LevelController::class, 'create']);   // menampilkan halaman form tambah level
        Route::get('/level/create_ajax', [LevelController::class, 'create_ajax']);
        Route::post('/level', [LevelController::class, 'store']);         // menyimpan data level baru
        Route::post('/level/ajax', [LevelController::class, 'store_ajax']);
        Route::get('/level/{id}/edit_ajax', [LevelController::class, 'edit_ajax']);
        Route::put('/level/{id}/update_ajax', [LevelController::class, 'update_ajax']);
        Route::get('/level/{id}/delete_ajax', [LevelController::class, 'confirm_ajax']);
        Route::delete('/level/{id}/delete_ajax', [LevelController::class, 'delete_ajax']);
        Route::get('/level/{id}', [LevelController::class, 'show']);       // menampilkan detail level
        Route::get('/level/{id}/edit', [LevelController::class, 'edit']);  // menampilkan halaman form edit level
        Route::put('/level/{id}', [LevelController::class, 'update']);     // menyimpan perubahan data level
        Route::delete('/level/{id}', [LevelController::class, 'destroy']); // menghapus data level
    });

    Route::middleware(['authorize:ADM,MNG'])->group(function () {
        Route::get('/kategori', [KategoriController::class, 'index']);          // menampilkan halaman awal kategori
        Route::post('/kategori/list', [KategoriController::class, 'list']);      // menampilkan data kategori dalam bentuk json untuk datatables
        Route::get('/kategori/create', [KategoriController::class, 'create']);   // menampilkan halaman form tambah kategori
        Route::get('/kategori/create_ajax', [KategoriController::class, 'create_ajax']);
        Route::post('/kategori/ajax', [KategoriController::class, 'store_ajax']);
        Route::post('/kategori', [KategoriController::class, 'store']);         // menyimpan data kategori baru
        Route::get('/kategori/{id}', [KategoriController::class, 'show']);       // menampilkan detail kategori
        Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit']);  // menampilkan halaman form edit kategori
        Route::put('/kategori/{id}', [KategoriController::class, 'update']);     // menyimpan perubahan data kategori
        Route::get('/kategori/{id}/edit_ajax', [KategoriController::class, 'edit_ajax']);
        Route::put('/kategori/{id}/update_ajax', [KategoriController::class, 'update_ajax']);
        Route::get('/kategori/{id}/delete_ajax', [KategoriController::class, 'confirm_ajax']);
        Route::delete('/kategori/{id}/delete_ajax', [KategoriController::class, 'delete_ajax']);
        Route::delete('/kategori/{id}', [KategoriController::class, 'destroy']); // menghapus data kategori
    });

    Route::middleware(['authorize:ADM,MNG,STF,CUS'])->group(function () {
        Route::get('/barang', [BarangController::class, 'index']);          // menampilkan halaman awal barang
        Route::post('/barang/list', [BarangController::class, 'list']);      // menampilkan data barang dalam bentuk json untuk datatables
        Route::get('/barang/create', [BarangController::class, 'create']);   // menampilkan halaman form tambah barang
        Route::get('/barang/create_ajax', [BarangController::class, 'create_ajax']);
        Route::post('/barang', [BarangController::class, 'store']);         // menyimpan data barang baru
        Route::post('/barang/ajax', [BarangController::class, 'store_ajax']);
        Route::get('/barang/import', [BarangController::class, 'import']); // ajax form upload excel
        Route::post('/barang/import_ajax', [BarangController::class, 'import_ajax']); //ajax import excel
        Route::get('/barang/export_excel', [BarangController::class, 'export_excel']); // export excel  
        Route::get('/barang/export_pdf', [BarangController::class, 'export_pdf']); // export pdf
        Route::get('/barang/{id}', [BarangController::class, 'show']);       // menampilkan detail barang
        Route::get('/barang/{id}/edit', [BarangController::class, 'edit']);  // menampilkan halaman form edit barang
        Route::put('/barang/{id}', [BarangController::class, 'update']);     // menyimpan perubahan data barang
        Route::get('/barang/{id}/edit_ajax', [BarangController::class, 'edit_ajax']);
        Route::put('/barang/{id}/update_ajax', [BarangController::class, 'update_ajax']);
        Route::get('/barang/{id}/delete_ajax', [BarangController::class, 'confirm_ajax']);
        Route::delete('/barang/{id}/delete_ajax', [BarangController::class, 'delete_ajax']);
        Route::delete('/barang/{id}', [BarangController::class, 'destroy']); // menghapus data barang

    });

    Route::middleware(['authorize:ADM,MNG'])->group(function () {
        Route::get('/supplier', [SupplierController::class, 'index']);          // menampilkan halaman awal supplier
        Route::post('/supplier/list', [SupplierController::class, 'list']);      // menampilkan data supplier dalam bentuk json untuk datatables
        Route::get('/supplier/create', [SupplierController::class, 'create']);   // menampilkan halaman form tambah supplier
        Route::get('/supplier/create_ajax', [SupplierController::class, 'create_ajax']);
        Route::post('/supplier', [SupplierController::class, 'store']);         // menyimpan data supplier baru
        Route::post('/supplier/ajax', [SupplierController::class, 'store_ajax']);
        Route::get('/supplier/{id}', [SupplierController::class, 'show']);       // menampilkan detail supplier
        Route::get('/supplier/{id}/edit', [SupplierController::class, 'edit']);  // menampilkan halaman form edit supplier
        Route::put('/supplier/{id}', [SupplierController::class, 'update']);     // menyimpan perubahan data supplier
        Route::get('/supplier/{id}/edit_ajax', [SupplierController::class, 'edit_ajax']);
        Route::put('/supplier/{id}/update_ajax', [SupplierController::class, 'update_ajax']);
        Route::get('/supplier/{id}/delete_ajax', [SupplierController::class, 'confirm_ajax']);
        Route::delete('/supplier/{id}/delete_ajax', [SupplierController::class, 'delete_ajax']);
        Route::delete('/supplier/{id}', [SupplierController::class, 'destroy']); // menghapus data supplier
    });


    Route::group(['prefix' => 'user'], function () {
        Route::get('/', [UserController::class, 'index']);          // menampilkan halaman awal user
        Route::post('/list', [UserController::class, 'list']);      // menampilkan data user dalam bentuk json untuk datatables
        Route::get('/create', [UserController::class, 'create']);   // menampilkan halaman form tambah user
        Route::post('/', [UserController::class, 'store']);         // menyimpan data user baru
        Route::get('/create_ajax', [UserController::class, 'create_ajax']);   // menampilkan halaman form tambah user ajax
        Route::post('/ajax', [UserController::class, 'store_ajax']);         // menyimpan data user baru ajax
        Route::get('/{id}', [UserController::class, 'show']);       // menampilkan detail user
        Route::get('/{id}/edit', [UserController::class, 'edit']);  // menampilkan halaman form edit user
        Route::put('/{id}', [UserController::class, 'update']);     // menyimpan perubahan data user
        Route::delete('/{id}', [UserController::class, 'destroy']); // menghapus data user
        Route::get('/{id}/edit_ajax', [UserController::class, 'edit_ajax']); // Menampilkan halaman form edit user Ajax
        Route::put('/{id}/update_ajax', [UserController::class, 'update_ajax']); // Menyimpan perubahan data user Ajax
        Route::get('/{id}/delete_ajax', [UserController::class, 'confirm_ajax']); // Untuk tampilkan form confirm delete user Ajax
        Route::delete('/{id}/delete_ajax', [UserController::class, 'delete_ajax']); // Untuk hapus data user Ajax
    });

    // Route::group(['prefix' => 'level'], function () {
    //     Route::get('/', [LevelController::class, 'index']); //menampilkan halaman awal user
    //     Route::post('/list', [LevelController::class, 'list']); //menampilkan dta user dalam bentuk json untuk datatables
    //     Route::get('/create', [LevelController::class, 'create']); //menampilkan halaman form tambah user
    //     Route::post('/', [LevelController::class, 'store']); //menyimpan data user baru
    //     Route::get('/create_ajax', [LevelController::class, 'create_ajax']);
    //     Route::post('/ajax', [LevelController::class, 'store_ajax']);
    //     Route::get('/{id}/edit_ajax', [LevelController::class, 'edit_ajax']);
    //     Route::put('/{id}/update_ajax', [LevelController::class, 'update_ajax']);
    //     Route::get('/{id}/delete_ajax', [LevelController::class, 'confirm_ajax']);
    //     Route::delete('/{id}/delete_ajax', [LevelController::class, 'delete_ajax']);
    //     Route::get('/{id}', [LevelController::class, 'show']); //menampilkan halaman detail user
    //     Route::get('/{id}/edit', [LevelController::class, 'edit']); //menampilkan halaman form edit user
    //     Route::put('{id}', [LevelController::class, 'update']); //menyimpan perubahan data user
    //     Route::delete('{id}', [LevelController::class, 'destroy']); //menghapus data user
    // });

    // Route::group(['prefix' => 'kategori'], function () {
    //     Route::get('/', [KategoriController::class, 'index']); //menampilkan halaman awal user
    //     Route::post('/list', [KategoriController::class, 'list']); //menampilkan dta user dalam bentuk json untuk datatables
    //     Route::get('/create', [KategoriController::class, 'create']); //menampilkan halaman form tambah user
    //     Route::post('/', [KategoriController::class, 'store']); //menyimpan data user baru
    //     Route::get('/create_ajax', [KategoriController::class, 'create_ajax']);
    //     Route::post('/ajax', [KategoriController::class, 'store_ajax']);
    //     Route::get('/{id}', [KategoriController::class, 'show']); //menampilkan halaman detail user
    //     Route::get('/{id}/edit', [KategoriController::class, 'edit']); //menampilkan halaman form edit user
    //     Route::put('{id}', [KategoriController::class, 'update']); //menyimpan perubahan data user
    //     Route::get('/{id}/edit_ajax', [KategoriController::class, 'edit_ajax']);
    //     Route::put('/{id}/update_ajax', [KategoriController::class, 'update_ajax']);
    //     Route::get('/{id}/delete_ajax', [KategoriController::class, 'confirm_ajax']);
    //     Route::delete('/{id}/delete_ajax', [KategoriController::class, 'delete_ajax']);
    //     Route::delete('{id}', [KategoriController::class, 'destroy']); //menghapus data user
    // });


    // Route::group(['prefix' => 'supplier'], function () {
    //     Route::get('/', [SupplierController::class, 'index']); //menampilkan halaman awal user
    //     Route::post('/list', [SupplierController::class, 'list']); //menampilkan dta user dalam bentuk json untuk datatables
    //     Route::get('/create', [SupplierController::class, 'create']); //menampilkan halaman form tambah user
    //     Route::post('/', [SupplierController::class, 'store']); //menyimpan data user baru
    //     Route::get('/create_ajax', [SupplierController::class, 'create_ajax']);
    //     Route::post('/ajax', [SupplierController::class, 'store_ajax']);
    //     Route::get('/{id}/edit_ajax', [SupplierController::class, 'edit_ajax']);
    //     Route::put('/{id}/update_ajax', [SupplierController::class, 'update_ajax']);
    //     Route::get('/{id}/delete_ajax', [SupplierController::class, 'confirm_ajax']);
    //     Route::delete('/{id}/delete_ajax', [SupplierController::class, 'delete_ajax']);
    //     Route::get('/{id}', [SupplierController::class, 'show']); //menampilkan halaman detail user
    //     Route::get('/{id}/edit', [SupplierController::class, 'edit']); //menampilkan halaman form edit user
    //     Route::put('{id}', [SupplierController::class, 'update']); //menyimpan perubahan data user
    //     Route::delete('{id}', [SupplierController::class, 'destroy']); //menghapus data user
    // });

    // Route::group(['prefix' => 'barang'], function () {
    //     Route::get('/', [BarangController::class, 'index']); //menampilkan halaman awal user
    //     Route::post('/list', [BarangController::class, 'list']); //menampilkan dta user dalam bentuk json untuk datatables
    //     Route::get('/create', [BarangController::class, 'create']); //menampilkan halaman form tambah user
    //     Route::post('/', [BarangController::class, 'store']); //menyimpan data user baru
    //     Route::get('/create_ajax', [BarangController::class, 'create_ajax']);
    //     Route::post('/ajax', [BarangController::class, 'store_ajax']);
    //     Route::get('/{id}/edit_ajax', [BarangController::class, 'edit_ajax']);
    //     Route::put('/{id}/update_ajax', [BarangController::class, 'update_ajax']);
    //     Route::get('/{id}/delete_ajax', [BarangController::class, 'confirm_ajax']);
    //     Route::delete('/{id}/delete_ajax', [BarangController::class, 'delete_ajax']);
    //     Route::get('/{id}', [BarangController::class, 'show']); //menampilkan halaman detail user
    //     Route::get('/{id}/edit', [BarangController::class, 'edit']); //menampilkan halaman form edit user
    //     Route::put('{id}', [BarangController::class, 'update']); //menyimpan perubahan data user
    //     Route::delete('{id}', [BarangController::class, 'destroy']); //menghapus data user
    // });

    // masukkan semua route yang perlu autentikasi di sini

});
