<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1, 
                'user_id' => 1, 
                'pembeli' => 'Faiza',  
                'penjualan_kode' => 'TRX001', 
                'penjualan_tanggal' => '2023-01-03 10:15:00'
        ],
            [
                'penjualan_id' => 2, 
                'user_id' => 1, 
                'pembeli' => 'Ana',  
                'penjualan_kode' => 'TRX002', 
                'penjualan_tanggal' => '2023-01-05 14:30:00'
            ],
            [
                'penjualan_id' => 3, 
                'user_id' => 1, 
                'pembeli' => 'Thasya',  
                'penjualan_kode' => 'TRX003', 
                'penjualan_tanggal' => '2023-01-07 09:45:00'
            ],
            [
                'penjualan_id' => 4, 
                'user_id' => 1, 
                'pembeli' => 'Eka', 
                'penjualan_kode' => 'TRX004', 
                'penjualan_tanggal' => '2023-01-10 16:00:00'
            ],
            [
                'penjualan_id' => 5, 
                'user_id' => 1, 
                'pembeli' => 'Falen',   
                'penjualan_kode' => 'TRX005', 
                'penjualan_tanggal' => '2023-01-12 11:20:00'
            ],
            [
                'penjualan_id' => 6, 
                'user_id' => 1, 
                'pembeli' => 'Izung', 
                'penjualan_kode' => 'TRX006', 
                'penjualan_tanggal' => '2023-01-15 17:10:00'
            ],
            [
                'penjualan_id' => 7, 
                'user_id' => 1, 
                'pembeli' => 'Azul',  
                'penjualan_kode' => 'TRX007', 
                'penjualan_tanggal' => '2023-01-18 13:40:00'
            ],
            [
                'penjualan_id' => 8, 
                'user_id' => 1, 
                'pembeli' => 'Elang',   
                'penjualan_kode' => 'TRX008', 
                'penjualan_tanggal' => '2023-01-20 08:50:00'
            ],
            [
                'penjualan_id' => 9, 
                'user_id' => 1, 
                'pembeli' => 'Doni', 
                'penjualan_kode' => 'TRX009', 
                'penjualan_tanggal' => '2023-01-25 15:05:00'
            ],
            [
                'penjualan_id' => 10, 
                'user_id' => 1, 
                'pembeli' => 'Agus',  
                'penjualan_kode' => 'TRX010', 
                'penjualan_tanggal' => '2023-01-28 12:25:00'
            ],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
