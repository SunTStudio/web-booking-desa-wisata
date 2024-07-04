<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermainanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permainans')->insert([
            [
            'nama' => 'Tidak Pesan',
            'deskripsi' => 'Tidak Pesan',
            'harga' => 0
            ],
            ['nama' => 'Cublak2 Suweng', 'deskripsi' => 'Deskripsi Cublak2 Suweng', 'harga' => 12500],
            ['nama' => 'Gobaksodor', 'deskripsi' => 'Deskripsi Gobaksodor', 'harga' => 12500],
            ['nama' => 'Jek-jekan', 'deskripsi' => 'Deskripsi Jek-jekan', 'harga' => 12500],
            ['nama' => 'Mul-mulan', 'deskripsi' => 'Deskripsi Mul-mulan', 'harga' => 12500],
            ['nama' => 'Bas-basan', 'deskripsi' => 'Deskripsi Bas-basan', 'harga' => 12500],
            ['nama' => 'Jongjling', 'deskripsi' => 'Deskripsi Jongjling', 'harga' => 12500],
            ['nama' => 'Benthik', 'deskripsi' => 'Deskripsi Benthik', 'harga' => 12500],
            ['nama' => 'Dakom', 'deskripsi' => 'Deskripsi Dakom', 'harga' => 12500],
            ['nama' => 'Yoyo', 'deskripsi' => 'Deskripsi Yoyo', 'harga' => 12500],
            ['nama' => 'Yeye', 'deskripsi' => 'Deskripsi Yeye', 'harga' => 12500],
            ['nama' => 'Gatheng', 'deskripsi' => 'Deskripsi Gatheng', 'harga' => 12500],
        ]);
    }
}
