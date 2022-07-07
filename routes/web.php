<?php

use App\Http\Controllers\BoletaController;
use App\Http\Controllers\ListBoletasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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
    return view('principal');
});


Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/{user:dni}', [PostController::class, 'index'])->name('posts.index');
//Route::get('/principal', [PostController::class, 'index'])->name('posts.index');


Route::get('/principal/boleta', [BoletaController::class, 'index'])->name('boletas');
Route::post('/principal/boleta', [BoletaController::class, 'store']);

Route::get('/principal/lista_boleta', [ListBoletasController::class, 'index'])->name('list_boletas');