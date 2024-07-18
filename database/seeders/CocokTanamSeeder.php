<?php

namespace Database\Seeders;

use App\Models\CocokTanam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;

class CocokTanamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $client = new Client();
        $response = $client->get('https://gist.githubusercontent.com/Yagamoo/ca3b1e232f57c3a9172029f64d01daf4/raw/1e971c95a1525cdad39f75f22a1ddc8076806f70/data.json');
        $data = json_decode($response->getBody());

        foreach ($data->cocokTanam as $item) {
            CocokTanam::create([
                'nama' => $item->nama,
                'deskripsi' => $item->deskripsi,
                'harga' => $item->harga,
            ]);
        }
    }
}
