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
            ['nama' => 'pohon', 'deskripsi' => 'Deskripsi pohon', 'harga' => 30000],
            ['nama' => 'Sayuran', 'deskripsi' => 'Deskripsi Sayuran', 'harga' => 30000],
            ['nama' => 'Biji-bijian', 'deskripsi' => 'Deskripsi Biji-bijian', 'harga' => 30000],
        ]);
    }
}
