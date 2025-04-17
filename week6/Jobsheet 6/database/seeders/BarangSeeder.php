<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => '1',
                'barang_kode' => 'BRG001',
                'barang_nama' => 'Rak Buku',
                'harga_beli' => 25000,
                'harga_jual' => 30000,
                'kategori_id' => 5,
            ],
            [
                'barang_id' => '2',
                'barang_kode' => 'BRG002',
                'barang_nama' => 'Container Barang',
                'harga_beli' => 47500,
                'harga_jual' => 50000,
                'kategori_id' => 5,
            ],
            [
                'barang_id' => '3',
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Indomie Goreng',
                'harga_beli' => 2500,
                'harga_jual' => 3000,
                'kategori_id' => 1,
            ],
            [
                'barang_id' => '4',
                'barang_kode' => 'BRG004',
                'barang_nama' => 'Cimory Yougurt',
                'harga_beli' => 5500,
                'harga_jual' => 8000,
                'kategori_id' => 2,
            ],
            [
                'barang_id' => '5',
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Milku Susu Strobery',
                'harga_beli' => 4500,
                'harga_jual' => 6000,
                'kategori_id' => 2,
            ],
            [
                'barang_id' => '6',
                'barang_kode' => 'BRG006',
                'barang_nama' => 'Kopi Kapal Api',
                'harga_beli' => 5000,
                'harga_jual' => 7000,
                'kategori_id' => 2,
            ],
            [
                'barang_id' => '7',
                'barang_kode' => 'BRG007',
                'barang_nama' => 'Tolak Angin',
                'harga_beli' => 3000,
                'harga_jual' => 5000,
                'kategori_id' => 3,
            ],
            [
                'barang_id' => '8',
                'barang_kode' => 'BRG008',
                'barang_nama' => 'Neozep',
                'harga_beli' => 2500,
                'harga_jual' => 4000,
                'kategori_id' => 3,
            ],
            [
                'barang_id' => '9',
                'barang_kode' => 'BRG009',
                'barang_nama' => 'Earphone',
                'harga_beli' => 125000,
                'harga_jual' => 128000,
                'kategori_id' => 4,
            ],
            [
                'barang_id' => '10',
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Iphone 15',
                'harga_beli' => 15000000,
                'harga_jual' => 16000000,
                'kategori_id' => 4,
            ],
            
        ];

        DB::table('m_barang')->insert($data);
    }
}
