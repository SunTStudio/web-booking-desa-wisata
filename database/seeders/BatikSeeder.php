<?php

namespace Database\Seeders;

use App\Models\Batik;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BatikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Batik::create([
            'nama' => 'Batik Parang',
            'deskripsi' => 'Batik Parang adalah salah satu motif batik yang paling terkenal di Indonesia.',
            'harga' => 150000
        ]);
    }
}
