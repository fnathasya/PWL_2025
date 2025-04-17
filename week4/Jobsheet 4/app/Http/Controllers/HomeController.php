<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Method untuk halaman utama
    public function index()
    {
        // Tampilkan view 'home'
        return view('home');
    }
}
