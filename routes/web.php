<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\Welcome2Controller;
use Brick\Math\Exception\RoundingNecessaryException;
use GuzzleHttp\Middleware;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Level;

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

Route::get('/', [Welcome2Controller::class, 'index']);

Route::get('/file-upload', [FileUploadController::class, 'fileUpload']);
Route::post('/file-upload', [FileUploadController::class, 'prosesFileUpload']);

Route::group(['prefix' => 'user'], function() {
    Route::get('/', [UserController::class, 'index']);          // menampilkan halaman awal user
    Route::post('/list', [UserController::class, 'list']);      // menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [UserController::class, 'create']);   // menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']);         // menyimpan data user baru
    Route::get('/{id}', [UserController::class, 'show']);       // menampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']);  // menampilkan halaman form edit user
    Route::put('/{id}', [UserController::class, 'update']);     // menyimpan perubahan data user
    Route::delete('/{id}', [UserController::class, 'destroy']); // menghapus data user
});


Route::group(['prefix' => 'level'], function () {
    Route::get('/', [LevelController::class, 'index']);
    Route::post('/list', [LevelController::class, 'list']);
    Route::get('/create', [LevelController::class, 'create']);
    Route::post('/', [LevelController::class, 'store']);
    Route::get('/{id}', [LevelController::class, 'show']);
    Route::get('/{id}/edit', [LevelController::class, 'edit']);
    Route::put('/{id}', [LevelController::class, 'update']);
    Route::delete('/{id}', [LevelController::class, 'destroy']);
});

Route::group(['prefix' => 'kategori'], function () {
    Route::get('/', [KategoriController::class, 'index']);
    Route::post('/list', [KategoriController::class, 'list']);
    Route::get('/create', [KategoriController::class, 'create']);
    Route::post('/', [KategoriController::class, 'store']);
    Route::get('/{id}', [KategoriController::class, 'show']);
    Route::get('/{id}/edit', [KategoriController::class, 'edit']);
    Route::put('/{id}', [KategoriController::class, 'update']);
    Route::delete('/{id}', [KategoriController::class, 'destroy']);
});

Route::group(['prefix' => 'barang'], function () {
    Route::get('/', [BarangController::class, 'index']);
    Route::post('/list', [BarangController::class, 'list']);
    Route::get('/create', [BarangController::class, 'create']);
    Route::post('/', [BarangController::class, 'store']);
    Route::get('/{id}', [BarangController::class, 'show']);
    Route::get('/{id}/edit', [BarangController::class, 'edit']);
    Route::put('/{id}', [BarangController::class, 'update']);
    Route::delete('/{id}', [BarangController::class, 'destroy']);
});

Route::group(['prefix' => 'stok'], function () {
    Route::get('/', [StokController::class, 'index']);
    Route::post('/list', [StokController::class, 'list']);
    Route::get('/create', [StokController::class, 'create']);
    Route::post('/', [StokController::class, 'store']);
    Route::get('/{id}', [StokController::class, 'show']);
    Route::get('/{id}/edit', [StokController::class, 'edit']);
    Route::put('/{id}', [StokController::class, 'update']);
    Route::delete('/{id}', [StokController::class, 'destroy']);
});

Route::group(['prefix' => 'penjualan'], function () {
    Route::get('/', [TransaksiController::class, 'index']);
    Route::post('/list', [TransaksiController::class, 'list']);
    Route::get('/create', [TransaksiController::class, 'create']);
    Route::get('/get-harga/{id}', [TransaksiController::class, 'getHarga']);
    Route::post('/', [TransaksiController::class, 'store']);
    Route::get('/{id}', [TransaksiController::class, 'show']);
    Route::get('/{id}/edit', [TransaksiController::class, 'edit']);
    Route::put('/{id}', [TransaksiController::class, 'update']);
    Route::delete('/{id}', [TransaksiController::class, 'destroy']);
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('proses_register', [AuthController::class, 'proses_register'])->name('proses_register');

Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['cek_login:1']], function(){
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['cek_login:2']], function(){
        Route::resource('manager', ManagerController::class);
    });
});    

// Route::get('/adminlte', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('home');
// })->name('/home');

// Route::get('/level', [LevelController::class, 'index'])->name('level.back');
// Route::get('/level/add', [LevelController::class, 'add'])->name('level.add');
// Route::post('/level', [LevelController::class, 'store']);
// Route::get('/level/edit/{id}', [LevelController::class, 'edit']);
// Route::put('/level/{id}', [LevelController::class, 'update']);
// Route::get('/level/delete/{id}', [LevelController::class, 'delete']);

// Route::get('/user', [UserController::class, 'index']);
// Route::get('/user/add', [UserController::class, 'add'])->name('user.add');
// Route::post('/user', [UserController::class, 'store']);
// Route::get('/user/edit/{id}', [UserController::class, 'edit']);
// Route::put('/user/{id}', [UserController::class, 'update']);
// Route::get('/user/delete/{id}', [UserController::class, 'delete']);


// Route::get('/kategori', [KategoriController::class, 'index']);
// Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
// Route::post('/kategori', [KategoriController::class, 'store']);
// Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);
// Route::put('/kategori/{id}', [KategoriController::class, 'update']);
// Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete']);

// Route::resource('m_user', POSController::class);