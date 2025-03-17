<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Method untuk menampilkan profile user
    public function showProfile($id, $name)
    {
        // Tampilkan view 'user' dengan parameter id dan name
        return view('user.profile', compact('id', 'name'));
    }
}
