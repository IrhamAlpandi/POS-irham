<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 1,
                'barang_nama' => 'Baju',
                'harga_beli' => 100000,
                'harga_jual' => 120000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 2,
                'barang_nama' => 'Celana',
                'harga_beli' => 120000,
                'harga_jual' => 150000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 3,
                'barang_nama' => 'NB',
                'harga_beli' => 1200000,
                'harga_jual' => 1500000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 4,
                'barang_nama' => 'Nike',
                'harga_beli' => 1000000,
                'harga_jual' => 1200000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 5,
                'barang_nama' => 'Lafiye',
                'harga_beli' => 180000,
                'harga_jual' => 200000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 6,
                'barang_nama' => 'Paris',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 7,
                'barang_nama' => 'Moisturizer',
                'harga_beli' => 110000,
                'harga_jual' => 115000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 8,
                'barang_nama' => 'Sunscreen',
                'harga_beli' => 80000,
                'harga_jual' => 90000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 9,
                'barang_nama' => 'Body Serum',
                'harga_beli' => 50000,
                'harga_jual' => 65000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 10,
                'barang_nama' => 'Sunblock',
                'harga_beli' => 112000,
                'harga_jual' => 130000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
