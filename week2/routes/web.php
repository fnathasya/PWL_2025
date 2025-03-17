<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
Use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;
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

// Mendefinisikan route HTTP GET untuk URL '/hello'
Route::get('/hello', [WelcomeController::class, 'hello']); 
// Route ini akan memanggil method 'hello' pada controller 'WelcomeController' ketika diakses

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

// pendefinisian rute GET untuk URL /user
Route::get('/user/{name?}', function ($name=null) { 
    // Mengembalikan teks 'Nama saya ...' sebagai respons langsung
    return 'Nama saya '.$name; 
}); 

// pendefinisian rute GET untuk URL /user
Route::get('/user/{name?}', function ($name='John') { 
    // Mengembalikan teks 'Nama saya ...' sebagai respons langsung
    return 'Nama saya '.$name; 
    });

// pendefinisian rute GET untuk URL /user
// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

// Routing dengan Single Action Controller
Route::get('/', HomeController::class);
Route::get('/about', AboutController::class);
Route::get('/articles/{id}', ArticleController::class);

// Route ini akan membuat route dengan semua aksi default untuk controller PhotoController
Route::resource('photos', PhotoController::class); 

//  Route ini akan membuat route dengan aksi 'index' dan 'show' saja untuk controller PhotoControlle
Route::resource('photos', PhotoController::class)->only([ 
    'index', 'show' 
]); 
// Route ini akan membuat route dengan semua aksi kecuali 'create', 'store', 'update', dan 'destroy' untuk controller PhotoController
Route::resource('photos', PhotoController::class)->except([ 
    'create', 'store', 'update', 'destroy' ]); 
