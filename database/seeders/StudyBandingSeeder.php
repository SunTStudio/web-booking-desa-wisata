<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudyBandingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('study_bandings')->insert([
            [
                'nama' => 'Tidak Pesan',
                'deskripsi' => 'Tidak Pesan',
                'harga' => 0
            ],
            [
                'nama' => 'Paket Study Banding',
                'deskripsi' => 'Materi Desa Wisata Krebet, Diskusi dan tanya jawab, Melihat Proses produksi dan kerajinan, Membatik Batik Paket III',
                'harga' => 75000
            ],
        ]);
    }
}
