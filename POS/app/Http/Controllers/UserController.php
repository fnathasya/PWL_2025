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
        // $user = UserModel::findOr(20, ['username', 'nama'], function(){
        //     abort(404);
        // }); // Mengambil data user dengan id 1, hanya kolom username dan nama

        // $user = UserModel::findOrfail(1); // Mengambil data user dengan id 1, jika tidak ditemukan akan menampilkan error 404
        
        // $user = UserModel::where('username', 'manager9')->firstOrFail(); // Mengambil data user dengan username 'manager9', jika tidak ditemukan akan menampilkan error 404
        // $user = UserModel::where('level_id', 2)->count(); // Mengambil jumlah user dengan level_id 2
        // return view('user', ['data' => $user]); // Mengambil nama level user
        
        // akses model UserModel
        // $user = UserModel::all(); // Mengambil semua data user
        // return view('user', ['data' => $user]); // Mengirim data user ke view

        // Menggunakan firstOrCreate
        // $user = UserModel::firstOrCreate(
        //     [
        //         'username' => 'manager22',
        //         'nama' => 'Manager Dua Dua',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2,
        //     ],
        // );

        // Menggunakan firstOrNew
        // $user = UserModel::firstOrNew(
        //     [
        //         'username' => 'manager33',
        //         'nama' => 'Manager Tiga Tiga',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2,
        //     ],
        // );
        // $user->save(); // Menyimpan data user baru
        // return view('user', ['data' => $user]); // Mengirim data user ke view

         // Membuat data user baru
         $user = UserModel::create([
            'username'  => 'manager55',
            'nama'      => 'Manager55',
            'password'  => Hash::make('12345'),
            'level_id'  => 2,
        ]);

        // Membuat data user baru
        $user = UserModel::create([
            'username'  => 'manager11',
            'nama'      => 'Manager11',
            'password'  => Hash::make('12345'),
            'level_id'  => 2,
        ]);

        // Ubah nilai username
        $user->username = 'manager12';

        // Simpan perubahan
        $user->save();

        // Cek apakah ada perubahan setelah disimpan
        dump($user->wasChanged());                          // true
        dump($user->wasChanged('username'));               // true
        dump($user->wasChanged(['username', 'level_id'])); // true
        dump($user->wasChanged('nama'));                   // false

        // Dump terakhir
        dd($user->wasChanged(['nama', 'username']));       // true
    }
}
