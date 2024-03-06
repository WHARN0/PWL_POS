<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'kategori_kode' => 'MSS',
                'kategori_nama' => 'Makanan Siap Saji',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_kode' => 'PA',
                'kategori_nama' => 'Pakaian dan Aksesoris',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_kode' => 'KK',
                'kategori_nama' => 'Kesehatan dan Kecantikan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_kode' => 'EG',
                'kategori_nama' => 'Elektronik dan Gadget',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_kode' => 'PRT',
                'kategori_nama' => 'Produk Rumah Tangga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}