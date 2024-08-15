<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class detailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Transaksi 1
            [
                'detail_id' => 1,
                'penjualan_id' => 1,
                'barang_id' => 1, // Baju
                'harga' => 120000,
                'jumlah' => 2,
                'penjualan_tanggal' => '2024-08-11 10:00:00',
            ],
            [
                'detail_id' => 2,
                'penjualan_id' => 1,
                'barang_id' => 2, // Celana
                'harga' => 150000,
                'jumlah' => 1,
                'penjualan_tanggal' => '2024-08-11 10:00:00',
            ],
            [
                'detail_id' => 3,
                'penjualan_id' => 1,
                'barang_id' => 3, // NB
                'harga' => 1500000,
                'jumlah' => 3,
                'penjualan_tanggal' => '2024-08-11 10:00:00',
            ],
        
            // Transaksi 2
            [
                'detail_id' => 4,
                'penjualan_id' => 2,
                'barang_id' => 4, // Nike
                'harga' => 1200000,
                'jumlah' => 1,
                'penjualan_tanggal' => '2024-08-11 11:00:00',
            ],
            [
                'detail_id' => 5,
                'penjualan_id' => 2,
                'barang_id' => 5, // Lafiye
                'harga' => 200000,
                'jumlah' => 2,
                'penjualan_tanggal' => '2024-08-11 11:00:00',
            ],
            [
                'detail_id' => 6,
                'penjualan_id' => 2,
                'barang_id' => 6, // Paris
                'harga' => 15000,
                'jumlah' => 1,
                'penjualan_tanggal' => '2024-08-11 11:00:00',
            ],
        
            // Transaksi 3
            [
                'detail_id' => 7,
                'penjualan_id' => 3,
                'barang_id' => 7, // Moisturizer
                'harga' => 115000,
                'jumlah' => 3,
                'penjualan_tanggal' => '2024-08-11 12:00:00',
            ],
            [
                'detail_id' => 8,
                'penjualan_id' => 3,
                'barang_id' => 8, // Sunscreen
                'harga' => 90000,
                'jumlah' => 2,
                'penjualan_tanggal' => '2024-08-11 12:00:00',
            ],
            [
                'detail_id' => 9,
                'penjualan_id' => 3,
                'barang_id' => 9, // Body Serum
                'harga' => 65000,
                'jumlah' => 1,
                'penjualan_tanggal' => '2024-08-11 12:00:00',
            ],
        
            // Transaksi 4
            [
                'detail_id' => 10,
                'penjualan_id' => 4,
                'barang_id' => 10, // Sunblock
                'harga' => 130000,
                'jumlah' => 1,
                'penjualan_tanggal' => '2024-08-11 13:00:00',
            ],
            [
                'detail_id' => 11,
                'penjualan_id' => 4,
                'barang_id' => 9, // Body Serum
                'harga' => 65000,
                'jumlah' => 2,
                'penjualan_tanggal' => '2024-08-11 13:00:00',
            ],
            [
                'detail_id' => 12,
                'penjualan_id' => 4,
                'barang_id' => 8, // Sunscreen
                'harga' => 90000,
                'jumlah' => 3,
                'penjualan_tanggal' => '2024-08-11 13:00:00',
            ],
        
            // Transaksi 5
            [
                'detail_id' => 13,
                'penjualan_id' => 5,
                'barang_id' => 7, // Moisturizer
                'harga' => 115000,
                'jumlah' => 1,
                'penjualan_tanggal' => '2024-08-11 14:00:00',
            ],
            [
                'detail_id' => 14,
                'penjualan_id' => 5,
                'barang_id' => 6, // Paris
                'harga' => 15000,
                'jumlah' => 3,
                'penjualan_tanggal' => '2024-08-11 14:00:00',
            ],
            [
                'detail_id' => 15,
                'penjualan_id' => 5,
                'barang_id' => 5, // Lafiye
                'harga' => 200000,
                'jumlah' => 2,
                'penjualan_tanggal' => '2024-08-11 14:00:00',
            ],
        
            // Transaksi 6
            [
                'detail_id' => 16,
                'penjualan_id' => 6,
                'barang_id' => 4, // Nike
                'harga' => 1200000,
                'jumlah' => 2,
                'penjualan_tanggal' => '2024-08-11 15:00:00',
            ],
            [
                'detail_id' => 17,
                'penjualan_id' => 6,
                'barang_id' => 3, // NB
                'harga' => 1500000,
                'jumlah' => 1,
                'penjualan_tanggal' => '2024-08-11 15:00:00',
            ],
            [
                'detail_id' => 18,
                'penjualan_id' => 6,
                'barang_id' => 2, // Celana
                'harga' => 150000,
                'jumlah' => 3,
                'penjualan_tanggal' => '2024-08-11 15:00:00',
            ],
        
            // Transaksi 7
            [
                'detail_id' => 19,
                'penjualan_id' => 7,
                'barang_id' => 1, // Baju
                'harga' => 120000,
                'jumlah' => 1,
                'penjualan_tanggal' => '2024-08-11 16:00:00',
            ],
            [
                'detail_id' => 20,
                'penjualan_id' => 7,
                'barang_id' => 7, // Moisturizer
                'harga' => 115000,
                'jumlah' => 2,
                'penjualan_tanggal' => '2024-08-11 16:00:00',
            ],
            [
                'detail_id' => 21,
                'penjualan_id' => 7,
                'barang_id' => 8, // Sunscreen
                'harga' => 90000,
                'jumlah' => 3,
                'penjualan_tanggal' => '2024-08-11 16:00:00',
            ],
        
            // Transaksi 8
            [
                'detail_id' => 22,
                'penjualan_id' => 8,
                'barang_id' => 9, // Body Serum
                'harga' => 65000,
                'jumlah' => 2,
                'penjualan_tanggal' => '2024-08-11 17:00:00',
            ],
            [
                'detail_id' => 23,
                'penjualan_id' => 8,
                'barang_id' => 10, // Sunblock
                'harga' => 130000,
                'jumlah' => 1,
                'penjualan_tanggal' => '2024-08-11 17:00:00',
            ],
            [
                'detail_id' => 24,
                'penjualan_id' => 8,
                'barang_id' => 5, // Lafiye
                'harga' => 200000,
                'jumlah' => 3,
                'penjualan_tanggal' => '2024-08-11 17:00:00',
            ],
        
            // Transaksi 9
            [
                'detail_id' => 25,
                'penjualan_id' => 9,
                'barang_id' => 6, // Paris
                'harga' => 15000,
                'jumlah' => 2,
                'penjualan_tanggal' => '2024-08-11 18:00:00',
            ],
            [
                'detail_id' => 26,
                'penjualan_id' => 9,
                'barang_id' => 4, // Nike
                'harga' => 1200000,
                'jumlah' => 1,
                'penjualan_tanggal' => '2024-08-11 18:00:00',
            ],
            [
                'detail_id' => 27,
                'penjualan_id' => 9,
                'barang_id' => 3, // NB
                'harga' => 1500000,
                'jumlah' => 3,
                'penjualan_tanggal' => '2024-08-11 18:00:00',
            ],
        
            // Transaksi 10
            [
                'detail_id' => 28,
                'penjualan_id' => 10,
                'barang_id' => 2, // Celana
                'harga' => 150000,
                'jumlah' => 2,
                'penjualan_tanggal' => '2024-08-11 19:00:00',
            ],
            [
                'detail_id' => 29,
                'penjualan_id' => 10,
                'barang_id' => 1, // Baju
                'harga' => 120000,
                'jumlah' => 3,
                'penjualan_tanggal' => '2024-08-11 19:00:00',
            ],
            [
                'detail_id' => 30,
                'penjualan_id' => 10,
                'barang_id' => 8, // Sunscreen
                'harga' => 90000,
                'jumlah' => 1,
                'penjualan_tanggal' => '2024-08-11 19:00:00',
            ],
        ];

        DB::table('t_penjualan_detail')->insert($data);
    }
}
