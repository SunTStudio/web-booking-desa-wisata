<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;
    protected $fillable = [
        'batik_id', 
        'kesenian_id', 
        'study_banding', 
        'cocok_tanam_id', 
        'permainan_id', 
        'homestay', 
        'kuliner_id'
    ];

    public function batik()
    {
        return $this->belongsTo(Batik::class, 'batik_id');
    }

    public function kesenian()
    {
        return $this->belongsTo(Kesenian::class, 'kesenian_id');
    }

    public function cocokTanam()
    {
        return $this->belongsTo(CocokTanam::class, 'cocok_tanam_id');
    }

    public function permainan()
    {
        return $this->belongsTo(Permainan::class, 'permainan_id');
    }

    public function kuliner()
    {
        return $this->belongsTo(Kuliner::class, 'kuliner_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'paket_id');
    }
}
