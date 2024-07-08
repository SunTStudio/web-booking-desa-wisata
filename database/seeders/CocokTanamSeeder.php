<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CocokTanamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cocok_tanams')->insert([
            [
                'nama' => 'Tidak Pesan',
                'deskripsi' => 'Tidak Pesan',
                'harga' => 0
            ],
            [
                'nama' => 'Pohon',
                'deskripsi' => 'Bibit dan alat dan bahan tanaman, Pendamping (Petani), Tanaman menjadi milik/hak pemilik lahan',
                'harga' => 30000
            ],
            [
                'nama' => 'Sayuran',
                'deskripsi' => 'Bibit dan alat dan bahan tanaman, Pendamping (Petani), Tanaman menjadi milik/hak pemilik lahan',
                'harga' => 30000
            ],
            [
                'nama' => 'Biji-bijian',
                'deskripsi' => 'Bibit dan alat dan bahan tanaman, Pendamping (Petani), Tanaman menjadi milik/hak pemilik lahan',
                'harga' => 30000
            ],
        ]);
    }
}
