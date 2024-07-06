<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomestaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('homestays')->insert([
            ['nama' => 'Tidak Pesan', 'deskripsi' => 'Tidak Pesan', 'harga' => 0],
            ['nama' => 'Homestay', 'deskripsi' => '1 kamar untuk 2 orang', 'harga' => 200000],
         ]);
    }
}
