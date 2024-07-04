<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
     protected $fillable = [
        'nama_pic', 
        'organisasi', 
        'visitor', 
        'tanggal', 
        'jam_mulai', 
        'jam_selesai', 
        'paket_id', 
        'guide_id', 
        'status'
    ];

    public function paket()
    {
        return $this->belongsTo(Paket::class, 'paket_id');
    }

    public function guide()
    {
        return $this->belongsTo(Guide::class, 'guide_id');
    }
}
