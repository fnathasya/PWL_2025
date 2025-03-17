<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke()
    {
        return 'Nama: Tasya Cantik, NIM: 2341760105'; // Menampilkan nama dan NIM
    }
}
