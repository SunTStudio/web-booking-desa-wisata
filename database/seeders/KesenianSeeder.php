<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KesenianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kesenians')->insert([
            ['nama' => 'Tidak Pesan', 'deskripsi' => 'Tidak Pesan', 'harga_belajar' => 0, 'harga_pementasan' => 0],
            ['nama' => 'tari', 'deskripsi' => 'Deskripsi Tari', 'harga_belajar' => 40000, 'harga_pementasan' => 150000],
            ['nama' => 'kethoprak', 'deskripsi' => 'Deskripsi Kethoprak', 'harga_belajar' => 40000, 'harga_pementasan' => 150000],
            ['nama' => 'jathilan', 'deskripsi' => 'Deskripsi Jathilan', 'harga_belajar' => 40000, 'harga_pementasan' => 150000],
            ['nama' => 'karawitan', 'deskripsi' => 'Deskripsi Karawitan', 'harga_belajar' => 40000, 'harga_pementasan' => 150000],
            ['nama' => 'gendring', 'deskripsi' => 'Deskripsi Gendring', 'harga_belajar' => 40000, 'harga_pementasan' => 150000],
            ['nama' => 'macapat', 'deskripsi' => 'Deskripsi Macapat', 'harga_belajar' => 40000, 'harga_pementasan' => 150000],
            ['nama' => 'hadroh', 'deskripsi' => 'Deskripsi Hadroh', 'harga_belajar' => 40000, 'harga_pementasan' => 150000],
            ['nama' => 'sholawatan', 'deskripsi' => 'Deskripsi Sholawatan', 'harga_belajar' => 40000, 'harga_pementasan' => 150000],
        ]);
    }
}
