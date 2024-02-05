<?php

use Illuminate\Support\Facades\Route;
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

route::get('/produk',[ProdukController::class, 'index'])->name('home_produk');
route::get('/produk-tambah',[ProdukController::class, 'tambah'])->name('tambah_produk');
route::post('/produk-create',[ProdukController::class, 'create'])->name('create_produk');
