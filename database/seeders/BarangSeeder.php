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
        DB::table('barangs')->insert([
            [
                'kode_barang' => 'B01',
                'nama_barang' => 'Bola Basket',
                'harga_barang' => 100000,
                'deskripsi_barang' => 'Bola Basket Original',
                'satuan_id' => 1
            ],
            [
                'kode_barang' => 'B02',
                'nama_barang' => 'Bola Voli',
                'harga_barang' => 60000,
                'deskripsi_barang' => 'Bola Voli Original',
                'satuan_id' => 2
            ],
        ]);
    }
}
