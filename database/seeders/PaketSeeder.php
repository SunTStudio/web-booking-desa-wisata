<?php

namespace Database\Seeders;

use App\Models\Paket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Paket::create([
            'batik_id' => 2, 
            'kesenian_id' => 4, 
            'study_banding_id' => 1, 
            'cocok_tanam_id' => 1, 
            'permainan_id' => 3, 
            'homestay_id' => 1, 
            'kuliner_id' => 3
        ]);
    }
}
