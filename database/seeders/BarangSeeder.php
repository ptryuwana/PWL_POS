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
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'B01', 'barang_nama' => 'Risol Mayo', 'harga_beli' => 2000, 'harga_jual' => 2500],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'B02', 'barang_nama' => 'Tahu Isi', 'harga_beli' => 1000, 'harga_jual' => 1500],
            ['barang_id' => 3, 'kategori_id' => 2, 'barang_kode' => 'B03', 'barang_nama' => 'Teh Pucuk', 'harga_beli' => 3000, 'harga_jual' => 3500],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'B04', 'barang_nama' => 'Sprite', 'harga_beli' => 5000, 'harga_jual' => 5500],
            ['barang_id' => 5, 'kategori_id' => 3, 'barang_kode' => 'B05', 'barang_nama' => 'Beng-Beng', 'harga_beli' => 3000, 'harga_jual' => 3500],
            ['barang_id' => 6, 'kategori_id' => 3, 'barang_kode' => 'B06', 'barang_nama' => 'Oreo', 'harga_beli' => 5000, 'harga_jual' => 6000],
            ['barang_id' => 7, 'kategori_id' => 4, 'barang_kode' => 'B07', 'barang_nama' => 'Pensil', 'harga_beli' => 3000, 'harga_jual' => 3500],
            ['barang_id' => 8, 'kategori_id' => 4, 'barang_kode' => 'B08', 'barang_nama' => 'Penghapus', 'harga_beli' => 1000, 'harga_jual' => 1500],
            ['barang_id' => 9, 'kategori_id' => 5, 'barang_kode' => 'B09', 'barang_nama' => 'Kabel RJ45', 'harga_beli' => 5000, 'harga_jual' => 6000],
            ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => 'B10', 'barang_nama' => 'Konektor', 'harga_beli' => 500, 'harga_jual' => 1000],
        ];
        DB::table('m_barang')->insert($data);
    }
}
