<?php

// Import class yang diperlukan
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SupplierController;


Route::get('/', [WelcomeController::class, 'index']); // menampilkan halaman awal aplikasi

// CRUD User
Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']);            // menampilkan halaman awal user
    Route::post('/list', [UserController::class, 'list']);        // menampilkan data user dalam bentuk JSON untuk datatables
    Route::get('/create', [UserController::class, 'create']);     // menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']);           // menyimpan data user baru
    Route::get('/{id}', [UserController::class, 'show']);         // menampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']);    // menampilkan halaman form edit user
    Route::put('/{id}', [UserController::class, 'update']);       // menyimpan perubahan data user
    Route::delete('/{id}', [UserController::class, 'destroy']);   // menghapus data user
});

// CRUD Level
Route::group(['prefix' => 'level'], function () {
    Route::get('/', [LevelController::class, 'index']);             // menampilkan halaman awal level
    Route::post('/list', [LevelController::class, 'list']);         // menampilkan data level dalam bentuk json untuk datatables
    Route::get('/create', [LevelController::class, 'create']);      // menampilkan halaman form tambah level
    Route::post('/', [LevelController::class, 'store']);            // menyimpan data level baru
    Route::get('/{id}', [LevelController::class, 'show']);          // menampilkan detail level
    Route::get('/{id}/edit', [LevelController::class, 'edit']);     // menampilkan halaman form edit level
    Route::put('/{id}', [LevelController::class, 'update']);        // menyimpan perubahan data level
    Route::delete('/{id}', [LevelController::class, 'destroy']);    // menghapus data level
});

// CRUD Kategori
Route::group(['prefix' => 'kategori'], function () {
    Route::get('/', [KategoriController::class, 'index'])->name('kategori.index'); // halaman utama
    Route::post('/list', [KategoriController::class, 'list'])->name('kategori.list'); // untuk datatables ajax
    Route::get('/create', [KategoriController::class, 'create'])->name('kategori.create'); // form tambah
    Route::post('/', [KategoriController::class, 'store'])->name('kategori.store'); // simpan data baru
    Route::get('/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit'); // form edit
    Route::put('/{id}', [KategoriController::class, 'update'])->name('kategori.update'); // update data
    Route::delete('/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy'); // hapus data
    Route::get('/{id}', [KategoriController::class, 'show'])->name('kategori.show');
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

Route::group(['prefix' => 'supplier'], function () {
    Route::get('/', [SupplierController::class, 'index']);
    Route::post('/list', [SupplierController::class, 'list']);
    Route::get('/create', [SupplierController::class, 'create']);
    Route::post('/', [SupplierController::class, 'store']);
    Route::get('/{id}', [SupplierController::class, 'show']);
    Route::get('/{id}/edit', [SupplierController::class, 'edit']);
    Route::put('/{id}', [SupplierController::class, 'update']);
    Route::delete('/{id}', [SupplierController::class, 'destroy']);
});