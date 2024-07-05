<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Booking::create([
            'nama_pic' => 'Iqbal', 
            'organisasi' => 'AMIKOM', 
            'visitor' => 100, 
            'tanggal' => '2024-08-20', 
            'jam_mulai' => '08:00', 
            'jam_selesai' => '11:00', 
            'paket_id' => 1, 
            'guide_id' => 1, 
            'status' => 'Unpaid'
        ]);
        Booking::create([
            'nama_pic' => 'Mahsun', 
            'organisasi' => 'AMIKOM', 
            'visitor' => 50, 
            'tanggal' => '2024-07-20', 
            'jam_mulai' => '09:00', 
            'jam_selesai' => '12:00', 
            'paket_id' => 1, 
            'guide_id' => 2, 
            'status' => 'Unpaid'
        ]);
    }
}
