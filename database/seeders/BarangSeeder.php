<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'barang_kode' => 'MSS1',
                'barang_nama' => 'Burger',
                'harga_beli' => '15000',
                'harga_jual' => '25000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'MSS2',
                'barang_nama' => 'Pizza',
                'harga_beli' => '20000',
                'harga_jual' => '30000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'PA1',
                'barang_nama' => 'Kacamata',
                'harga_beli' => '50000',
                'harga_jual' => '75000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'PA2',
                'barang_nama' => 'Celana Jeans',
                'harga_beli' => '55000',
                'harga_jual' => '80000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'KK1',
                'barang_nama' => 'Serum Wajah',
                'harga_beli' => '120000',
                'harga_jual' => '160000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'KK2',
                'barang_nama' => 'Toner',
                'harga_beli' => '125000',
                'harga_jual' => '165000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'EG1',
                'barang_nama' => 'TWS',
                'harga_beli' => '150000',
                'harga_jual' => '180000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'EG2',
                'barang_nama' => 'Mini Fan Electric',
                'harga_beli' => '155000',
                'harga_jual' => '185000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'PRT1',
                'barang_nama' => 'Kispray',
                'harga_beli' => '20000',
                'harga_jual' => '40000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'PRT2',
                'barang_nama' => 'So Klin Lantai',
                'harga_beli' => '25000',
                'harga_jual' => '45000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
