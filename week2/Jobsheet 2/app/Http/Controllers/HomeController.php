<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Fungsi bawaan Single Action Controller
    public function __invoke()
    {
        return 'Selamat Datang'; // Menampilkan pesan selamat datang
    }
}
