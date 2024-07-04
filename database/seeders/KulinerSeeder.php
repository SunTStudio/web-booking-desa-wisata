<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KulinerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kuliners')->insert([
            [
            'nama' => 'Tidak Pesan',
            'deskripsi' => 'Tidak Pesan',
            'harga' => 0
            ],
            ['nama' => 'Paket Nasi Box I', 'deskripsi' => 'Deskripsi Paket Nasi Box I', 'harga' => 12000],
            ['nama' => 'Paket Nasi Box II', 'deskripsi' => 'Deskripsi Paket Nasi Box II', 'harga' => 15000],
            ['nama' => 'Paket Dhaharan I', 'deskripsi' => 'Deskripsi Paket Dhaharan I', 'harga' => 20000],
            ['nama' => 'Paket Dhaharan II', 'deskripsi' => 'Deskripsi Paket Dhaharan II', 'harga' => 25000],
            ['nama' => 'Paket Dhaharan III', 'deskripsi' => 'Deskripsi Paket Dhaharan III', 'harga' => 30000],
            ['nama' => 'Paket Dhaharan IV', 'deskripsi' => 'Deskripsi Paket Dhaharan IV', 'harga' => 40000],
            ['nama' => 'Paket Dhaharan V', 'deskripsi' => 'Deskripsi Paket Dhaharan V', 'harga' => 50000],
        ]);
    }
}
