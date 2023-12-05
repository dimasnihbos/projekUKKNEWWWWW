<?php

use App\Http\Controllers\halamanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\produkContorller;
use PharIo\Manifest\AuthorElementCollection;

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

Route::get('logkasir', [loginController::class, 'log']);
Route::get('logout', [loginController::class, 'logout']);
Route::get('register', [loginController::class, 'register']);

Route::get('home', [halamanController::class, 'home']);
Route::get('produk', [halamanController::class, 'produk']);

Route::get('hapus-barang', [halamanController::class, 'delete']);

Route::get('tambahstok', [produkContorller::class, 'insert']);
Route::get('/updatestok/{id}', [produkContorller::class, 'update']);
Route::put('/updatestok/{id}', [produkContorller::class, 'perbarui']);
Route::put('/update/{id}', [produkContorller::class, 'edit'])->name('edit');
Route::get('/hapusstok/{id}', [produkContorller::class, 'delete']);

Route::get('datapelanggan', [halamanController::class, 'pelanggan']);
Route::get('/tambahpelanggan', [pelangganController::class, 'tambahpelanggan']);