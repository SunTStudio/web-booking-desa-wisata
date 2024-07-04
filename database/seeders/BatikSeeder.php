<?php

namespace Database\Seeders;

use App\Models\Batik;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BatikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('batiks')->insert([
            [
            'nama' => 'Tidak Pesan',
            'deskripsi' => 'Tidak Pesan',
            'harga' => 0
            ],
            [
            'nama' => 'Paket Batik Satu',
            'deskripsi' => 'Gantungan Kunci',
            'harga' => 20000
            ],
            [
            'nama' => 'Paket Batik Dua',
            'deskripsi' => 'Centong, Solet',
            'harga' => 30000
            ],
            [
            'nama' => 'Paket Batik Tiga',
            'deskripsi' => 'Topeng S, Wayang Mini, Tempat Pensil, Telenan',
            'harga' => 40000
            ],
            [
            'nama' => 'Paket Batik Empat',
            'deskripsi' => 'Topeng M, Box Tissue, Wayang S',
            'harga' => 60000
            ],
            [
            'nama' => 'Paket Batik Lima',
            'deskripsi' => 'Topeng L, Wayang M, Nampan S',
            'harga' => 75000
            ],
        ]);
    }
}
