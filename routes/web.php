<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;

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
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/check', [AuthController::class, 'check'])->name('check');



Route::middleware(['auth', 'role:admin,user'])->group(function () {
    
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/produk',[ProdukController::class, 'index'])->name('home_produk');
    Route::get('/produk-tambah',[ProdukController::class, 'tambah'])->name('tambah_produk');
    Route::post('/produk-create',[ProdukController::class, 'create'])->name('create_produk');
    Route::get('/produk-edit/{id}',[ProdukController::class, 'edit'])->name('edit_produk');
    Route::post('/produk-update/{id}',[ProdukController::class, 'update'])->name('update_produk');
    Route::get('/produk-delete/{id}',[ProdukController::class, 'delete'])->name('delete_produk');
    
}); 
