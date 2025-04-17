<?php

namespace App\Http\Controllers; // Menentukan namespace untuk controller

use Illuminate\Http\Request; // Mengimpor class Request untuk menangani HTTP request

class PageController extends Controller
{
    // Method untuk menangani request GET ke '/'
    public function index()
    {
        return 'Selamat Datang'; // Mengembalikan pesan "Selamat Datang"
    }

    // Method untuk menangani request GET ke '/about'
    public function about()
    {
        return 'Nama: Faiza Anathasya, NIM: 2341760105'; // Mengembalikan nama dan NIM
    }

    // Method untuk menangani request GET ke '/articles/{id}'
    public function articles($id)
    {
        return "Halaman Artikel dengan Id $id"; // Mengembalikan halaman artikel dengan ID yang dinamis
    }
}
