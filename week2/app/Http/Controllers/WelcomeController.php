<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello()
    {
        return 'Hello World';
    }

    // Menambahkan method greeting
    public function greeting(){
        return view('blog.hello')
        ->with('name','tasya') 
        ->with('occupation','Astronaut'); 


    }
}
