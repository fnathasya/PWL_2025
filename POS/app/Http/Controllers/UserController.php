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
        // $data = [
        //     'nama' => 'Pelanggan Pertama',
        //     'username' => 'manager_tiga',
        //     'password' => Hash::make('12345'),
        //     'nama' => 'Manager 3',
        //     'level_id' => 2,
        // ];
        // UserModel::where('username', 'customer-1')->update($data); // update data user dengan username 'customer-1'
        
        // UserModel::create($data); // Menambah data user baru

        // $user = UserModel::find(1); // Mengambil data user dengan id 1
        // $user = UserModel::where('level_id', 1)->first(); // Mengambil data user dengan level_id 1
        // $user = UserModel::firstWhere('level_id', 1); // Mengambil data user dengan level_id 1
        $user = UserModel::findOr(20, ['username', 'nama'], function(){
            abort(404);
        }); // Mengambil data user dengan id 1, hanya kolom username dan nama
        return view('user', ['data' => $user]); // Mengambil nama level user
        
        // akses model UserModel
        // $user = UserModel::all(); // Mengambil semua data user
        // return view('user', ['data' => $user]); // Mengirim data user ke view
    }
}
