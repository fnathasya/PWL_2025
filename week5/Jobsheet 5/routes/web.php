<?php

// Import class yang diperlukan
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LevelController;

// Route untuk halaman utama (homepage)
// Route::get('/', [HomeController::class, 'index']); // Akses URL: '/', menjalankan method 'index' di HomeController

// Group route dengan prefix 'products'
// Route::prefix('products')->group(function () {
    
//     // Route untuk kategori Food & Beverages
//     Route::get('/food-beverages', [ProductController::class, 'foodBeverages'])->name('category.food-beverage');
//     // Akses URL: '/products/food-beverages', method 'foodBeverages' di ProductController, nama route: category.food-beverage

//     // Route untuk kategori Beauty & Health
//     Route::get('/beauty-health', [ProductController::class, 'beautyHealth'])->name('category.beauty-health');
//     // Akses URL: '/products/beauty-health', method 'beautyHealth', nama route: category.beauty-health

//     // Route untuk kategori Home Care
//     Route::get('/home-care', [ProductController::class, 'homeCare'])->name('category.home-care');
//     // Akses URL: '/products/home-care', method 'homeCare', nama route: category.home-care

//     // Route untuk kategori Baby & Kid
//     Route::get('/baby-kid', [ProductController::class, 'babyKid'])->name('category.baby-kid');
//     // Akses URL: '/products/baby-kid', method 'babyKid', nama route: category.baby-kid
// });

// // Route untuk halaman profile user
// Route::get('/user/{id}/{name}', [UserController::class, 'showProfile'])->name('user.profile');
// // Akses URL: '/user/{id}/{name}', menjalankan method 'showProfile' di UserController, nama route: user.profile

// // Route untuk halaman sales
// Route::get('/sales', [SalesController::class, 'index'])->name('sales');
// Akses URL: '/sales', menjalankan method 'index' di SalesController, nama route: sales

// Akses URL: '/', menjalankan function yang mengembalikan view 'welcome'
Route::get('/', function () {
    return view('welcome');
});


// Akses URL: '/level', menjalankan method 'index' di LevelController
Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'tambah']);
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori', [KategoriController::class, 'store']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::resource('kategori', KategoriController::class);


