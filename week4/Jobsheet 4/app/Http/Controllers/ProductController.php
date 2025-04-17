<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Method untuk kategori Food & Beverages
    public function foodBeverages()
    {
        // Tampilkan view 'products/food-beverages'
        return view('products.food-beverages');
    }

    // Method untuk kategori Beauty & Health
    public function beautyHealth()
    {
        // Tampilkan view 'products/beauty-health'
        return view('products.beauty-health');
    }

    // Method untuk kategori Home Care
    public function homeCare()
    {
        // Tampilkan view 'products/home-care'
        return view('products.home-care');
    }

    // Method untuk kategori Baby & Kid
    public function babyKid()
    {
        // Tampilkan view 'products/baby-kid'
        return view('products.baby-kid');
    }
}
