<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['stok_id' => 1, 'barang_id' => 1, 'user_id' => 3, 'stok_tanggal' => '2024-01-12', 'stok_jumlah' => 15],
            ['stok_id' => 2, 'barang_id' => 2, 'user_id' => 3, 'stok_tanggal' => '2024-01-16', 'stok_jumlah' => 15],
            ['stok_id' => 3, 'barang_id' => 3, 'user_id' => 3, 'stok_tanggal' => '2024-02-21', 'stok_jumlah' => 50],
            ['stok_id' => 4, 'barang_id' => 4, 'user_id' => 3, 'stok_tanggal' => '2024-02-25', 'stok_jumlah' => 52],
            ['stok_id' => 5, 'barang_id' => 5, 'user_id' => 3, 'stok_tanggal' => '2024-03-11', 'stok_jumlah' => 35],
            ['stok_id' => 6, 'barang_id' => 6, 'user_id' => 3, 'stok_tanggal' => '2024-03-26', 'stok_jumlah' => 41],
            ['stok_id' => 7, 'barang_id' => 7, 'user_id' => 3, 'stok_tanggal' => '2024-04-09', 'stok_jumlah' => 100],
            ['stok_id' => 8, 'barang_id' => 8, 'user_id' => 3, 'stok_tanggal' => '2024-04-11', 'stok_jumlah' => 102],
            ['stok_id' => 9, 'barang_id' => 9, 'user_id' => 2, 'stok_tanggal' => '2024-05-25', 'stok_jumlah' => 87],
            ['stok_id' => 10, 'barang_id' => 10, 'user_id' => 2, 'stok_tanggal' => '2024-05-26', 'stok_jumlah' => 200],
        ];
        DB::table('t_stok')->insert($data);
    }
}