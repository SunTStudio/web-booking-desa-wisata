<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'no_telp'];

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'guide_id');
    }
}
