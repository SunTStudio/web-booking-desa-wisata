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
            ['nama' => 'Tidak Pesan', 'deskripsi' => 'Tidak Pesan', 'harga' => 0],
            ['nama' => 'Paket Study Banding', 'deskripsi' => 'Deskripsi Paket Study Banding', 'harga' => 75000],
         ]);
    }
}
