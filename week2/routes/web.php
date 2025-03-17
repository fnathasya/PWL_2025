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
    