<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Welcome2Controller;
use Brick\Math\Exception\RoundingNecessaryException;
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

Route::group(['prefix' => 'user'], function(){
    Route:: get('/', [UserController::class, 'index']);
    Route:: post('/list', [UserController::class, 'list']);
    Route:: get('/create', [UserController::class, 'create']);
    Route:: post('/', [UserController::class, 'store']);
    Route:: get('/{id}', [UserController::class, 'show']);
    Route:: get('/{id}/edit', [UserController::class, 'edit']);
    Route:: put('/{id}', [UserController::class, 'update']);
    Route:: delete('/{id}', [UserController::class, 'destroy']);
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