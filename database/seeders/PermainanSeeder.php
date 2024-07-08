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
            [
                'nama' => 'Cublak2 Suweng',
                'deskripsi' => 'Area Permainan, Alat/Bahan Permainan, Air Minum Kemasan',
                'harga' => 12500
            ],
            [
                'nama' => 'Gobaksodor',
                'deskripsi' => 'Area Permainan, Alat/Bahan Permainan, Air Minum Kemasan',
                'harga' => 12500
            ],
            [
                'nama' => 'Jek-jekan',
                'deskripsi' => 'Area Permainan, Alat/Bahan Permainan, Air Minum Kemasan',
                'harga' => 12500
            ],
            [
                'nama' => 'Mul-mulan',
                'deskripsi' => 'Area Permainan, Alat/Bahan Permainan, Air Minum Kemasan',
                'harga' => 12500
            ],
            [
                'nama' => 'Bas-basan',
                'deskripsi' => 'Area Permainan, Alat/Bahan Permainan, Air Minum Kemasan',
                'harga' => 12500
            ],
            [
                'nama' => 'Jongjling',
                'deskripsi' => 'Area Permainan, Alat/Bahan Permainan, Air Minum Kemasan',
                'harga' => 12500
            ],
            [
                'nama' => 'Benthik',
                'deskripsi' => 'Area Permainan, Alat/Bahan Permainan, Air Minum Kemasan',
                'harga' => 12500
            ],
            [
                'nama' => 'Dakom',
                'deskripsi' => 'Area Permainan, Alat/Bahan Permainan, Air Minum Kemasan',
                'harga' => 12500
            ],
            [
                'nama' => 'Yoyo',
                'deskripsi' => 'Area Permainan, Alat/Bahan Permainan, Air Minum Kemasan',
                'harga' => 12500
            ],
            [
                'nama' => 'Yeye',
                'deskripsi' => 'Area Permainan, Alat/Bahan Permainan, Air Minum Kemasan',
                'harga' => 12500
            ],
            [
                'nama' => 'Gatheng',
                'deskripsi' => 'Area Permainan, Alat/Bahan Permainan, Air Minum Kemasan',
                'harga' => 12500
            ],
        ]);
    }
}
