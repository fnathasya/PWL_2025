<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Method untuk menampilkan profile user
    public function index()
    {
        // Tampilkan view 'user' dengan parameter id dan name
        // return view('user.profile', compact('id', 'name'));

        // tambah data user dengan Eloquent Model
        $data = [
            'nama' => 'Pelanggan Pertama',
            
        ];
        UserModel::where('username', 'customer-1')->update($data); // update data user dengan username 'customer-1'

        // akses model UserModel
        $user = UserModel::all(); // Mengambil semua data user
        return view('user', ['data' => $user]); // Mengirim data user ke view
    }
}
