<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KulinerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kuliners')->insert([
            [
                'nama' => 'Tidak Pesan',
                'deskripsi' => 'Tidak Pesan',
                'harga' => 0
            ],
            [
                'nama' => 'Paket Nasi Box I',
                'deskripsi' => 'Nasi Putih, Telur Semur, Oseng-oseng, Kerupuk, Buah, Air Minum Kemasan',
                'harga' => 12000
            ],
            [
                'nama' => 'Paket Nasi Box II',
                'deskripsi' => 'Nasi Putih, Ayam Suwir, Oseng-oseng, Kerupuk, Buah, Air Minum Kemasan',
                'harga' => 15000
            ],
            [
                'nama' => 'Paket Dhaharan I',
                'deskripsi' => 'Nasi Putih, Bobor Kelor, Sambel Jenggot, Tahu/Tempe Goreng, Kerupuk, Buah, Air Minum Kemasan/Teh',
                'harga' => 20000
            ],
            [
                'nama' => 'Paket Dhaharan II',
                'deskripsi' => 'Nasi Putih, Tetelan, Sayur Brongkos, Mie Lethek Goreng, Kerupuk, Buah, Air Minum Kemasan/Teh',
                'harga' => 25000
            ],
            [
                'nama' => 'Paket Dhaharan III',
                'deskripsi' => 'Nasi Putih, Ayam Goreng, Sup, Tahu/Tempe Goreng, Sambal, Kerupuk, Buah, Air Minum Kemasan/Teh',
                'harga' => 30000
            ],
            [
                'nama' => 'Paket Dhaharan IV',
                'deskripsi' => 'Nasi Putih, Ikan Filet Asam Manis, 1/2 Telur Semur, Sup Jagung Muda, Sambal, Kerupuk, Buah, Air Minum Kemasan/Teh',
                'harga' => 40000
            ],
            [
                'nama' => 'Paket Dhaharan V',
                'deskripsi' => 'Nasi Putih, Gudeng Manggar, Ayam Suwir, Oseng-oseng, Trancam, Buah, Air Mineral',
                'harga' => 50000
            ],
        ]);
    }
}
