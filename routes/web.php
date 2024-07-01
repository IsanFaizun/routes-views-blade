<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

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

Route::get('/toko_buku', [BukuController::class, 'index']);
// Create
Route::get('/toko_buku/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('/toko_buku', [BukuController::class, 'store'])->name('buku.store');
// Delete
Route::post('/toko_buku/destroy/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');
// Update
Route::get('/toko_buku/edit/{id}', [BukuController::class, 'edit'])->name('buku.edit');
Route::post('/toko_buku/upadate/{id}', [BukuController::class, 'update'])->name('buku.update');
// Search
Route::get('/toko_buku/search', [BukuController::class, 'search'])->name('buku.search');