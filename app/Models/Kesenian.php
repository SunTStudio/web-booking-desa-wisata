<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kesenian extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'deskripsi', 'harga_belajar','harga_pementasan'];

    public function pakets()
    {
        return $this->hasMany(Paket::class, 'kesenian_id');
    }
}
