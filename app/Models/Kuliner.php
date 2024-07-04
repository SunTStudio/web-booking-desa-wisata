<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuliner extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'deskripsi', 'harga'];

    public function pakets()
    {
        return $this->hasMany(Paket::class, 'kuliner_id');
    }
}
