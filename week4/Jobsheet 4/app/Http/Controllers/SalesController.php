<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    // Method untuk halaman sales
    public function index()
    {
        // Tampilkan view 'sales'
        return view('sales.index');
    }
}
