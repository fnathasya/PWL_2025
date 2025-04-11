<?php
 
 namespace Database\Seeders;
 
 use Illuminate\Database\Console\Seeds\WithoutModelEvents;
 use Illuminate\Database\Seeder;
 use Illuminate\Support\Facades\DB;
 use Carbon\Carbon;
 
 class SupplierSeeder extends Seeder
 {
     /**
      * Run the database seeds.
      */
     public function run(): void
     {
         $data_supplier = [
             [
                 'supplier_kode' => 'SUP001',
                 'supplier_nama' => 'PT. Indofood CBP Sukses Makmur Tbk',
                 'supplier_alamat' => 'Perum Pondok Blimbing Indah, Jl. Raya Tlogomas No.11, Kota Malang',
                 'created_at' => Carbon::now()
             ],
             
         ];
 
         DB::table('m_supplier')->insert($data_supplier);
     }
 }