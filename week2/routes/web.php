<?php

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

// Mendefinisikan rute GET untuk URL /hello
Route::get('/hello', function () {
    // Mengembalikan teks 'Hello World' sebagai respons langsung
    return 'Hello World';
});

// pendefinisian rute GET untuk URL /world
Route::get('/world', function () {    
    // Mengembalikan teks 'World' sebagai respons langsung
    return 'World'; 
}); 

// pendefinisian rute GET untuk URL /welcome
Route::get('/welcome', function () { 
    // Mengembalikan teks 'Selamat Datang' sebagai respons langsung
    return 'Selamat Datang'; 
    }); 

// pendefinisian rute GET untuk URL /about 
Route::get('/about', function () {
    // Mengembalikan teks 'Faiza / 2341760105' sebagai respons langsung
    return 'Faiza / 2341760105';
});

// pendefinisian rute GET untuk URL /articles
Route::get('/user/{name}', function ($name) { 
    // Mengembalikan teks 'Nama saya ...' sebagai respons langsung
    return 'Nama saya '.$name; 
    }); 
    
// pendefinisian rute GET untuk URL /articles
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) { 
    // Mengembalikan teks 'Pos ke-... Komentar ke-...' sebagai respons langsung
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; 
}); 

// pendefinisian rute GET untuk URL /articles
Route::get('/articles/{id}', function ($id) { 
    // Mengembalikan teks 'Halaman Artikel dengan ID ...' sebagai respons langsung
    return 'Halaman Artikel dengan ID ' . $id;
});