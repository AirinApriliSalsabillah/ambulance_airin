<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemilikAmbulance extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'alamat', 'no_hp', 'daerah', 'keterangan', 'latitude', 'longitude',
    ];
}

