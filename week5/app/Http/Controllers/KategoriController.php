<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;

// class KategoriController extends Controller
// {
//     public function index()
//     {
//         // $data = [
//         //     'kategori_kode' => 'SNK',
//         //     'kategori_nama' => 'Snack/Makanan Ringan',
//         //     'created_at' => now()
//         // ];
//         // DB::table('m_kategori')->insert($data);
//         // return 'Insert data kategori baru berhasil ditambahkan';

//         // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
//         // return 'Update data kategori berhasil. Jumlah data yang diupdate: ' . $row . ' baris';

//         // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
//         // return 'Delete data kategori berhasil. Jumlah data yang dihapus: ' . $row . ' baris';

//         // $data = DB::table('m_kategori')->get();
//         // return view('kategori', ['data' => $data]);

//         return $dataTable->render('kategori.index');
//     }
// }


class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        KategoriModel::create([
            'kategori_kode' => $request->kategori_kode,
            'kategori_nama' => $request->kategori_nama,
        ]);

        return redirect('/kategori');
    }
}
