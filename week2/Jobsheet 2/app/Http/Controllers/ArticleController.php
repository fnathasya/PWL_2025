<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __invoke($id)
    {
        return "Halaman Artikel dengan Id $id"; // Menampilkan halaman artikel dengan ID dinamis
    }
}
