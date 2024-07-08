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
            ['nama' => 'Tari', 'deskripsi' => 'Deskripsi Tari', 'harga_belajar' => 40000, 'harga_pementasan' => 150000],
            ['nama' => 'Kethoprak', 'deskripsi' => 'Deskripsi Kethoprak', 'harga_belajar' => 40000, 'harga_pementasan' => 150000],
            ['nama' => 'Jathilan', 'deskripsi' => 'Deskripsi Jathilan', 'harga_belajar' => 40000, 'harga_pementasan' => 150000],
            ['nama' => 'Karawitan', 'deskripsi' => 'Deskripsi Karawitan', 'harga_belajar' => 40000, 'harga_pementasan' => 150000],
            ['nama' => 'Gendring', 'deskripsi' => 'Deskripsi Gendring', 'harga_belajar' => 40000, 'harga_pementasan' => 150000],
            ['nama' => 'Macapat', 'deskripsi' => 'Deskripsi Macapat', 'harga_belajar' => 40000, 'harga_pementasan' => 150000],
            ['nama' => 'Hadroh', 'deskripsi' => 'Deskripsi Hadroh', 'harga_belajar' => 40000, 'harga_pementasan' => 150000],
            ['nama' => 'Sholawatan', 'deskripsi' => 'Deskripsi Sholawatan', 'harga_belajar' => 40000, 'harga_pementasan' => 150000],
        ]);
    }
}
