<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class penjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 1,
                'pembeli' => 'John Doe',
                'penjualan_kode' => '001',
                'penjualan_tanggal' => '2024-08-11 10:00:00',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 2,
                'pembeli' => 'Jane Smith',
                'penjualan_kode' => '002',
                'penjualan_tanggal' => '2024-08-11 11:00:00',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Michael Johnson',
                'penjualan_kode' => '003',
                'penjualan_tanggal' => '2024-08-11 12:00:00',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 1,
                'pembeli' => 'Emily Davis',
                'penjualan_kode' => '004',
                'penjualan_tanggal' => '2024-08-11 13:00:00',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 2,
                'pembeli' => 'David Wilson',
                'penjualan_kode' => '005',
                'penjualan_tanggal' => '2024-08-11 14:00:00',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Sophia Martinez',
                'penjualan_kode' => '006',
                'penjualan_tanggal' => '2024-08-11 15:00:00',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 1,
                'pembeli' => 'Daniel Anderson',
                'penjualan_kode' => '007',
                'penjualan_tanggal' => '2024-08-11 16:00:00',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 2,
                'pembeli' => 'Olivia Taylor',
                'penjualan_kode' => '008',
                'penjualan_tanggal' => '2024-08-11 17:00:00',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Liam Brown',
                'penjualan_kode' => '009',
                'penjualan_tanggal' => '2024-08-11 18:00:00',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 1,
                'pembeli' => 'Isabella Garcia',
                'penjualan_kode' => '010',
                'penjualan_tanggal' => '2024-08-11 19:00:00',
            ],
        ];
        DB::table('t_penjualan')->insert($data);       
    }
}
