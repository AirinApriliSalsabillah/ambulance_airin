<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ambulance extends Model {
    use HasFactory;

    protected $table = "ambulance";

    protected $fillable = [
        'id_pemilik', 'foto', 'keterangan', 'status'
    ];

    public function pemilikAmbulance() {
        return $this->belongsTo(PemilikAmbulance::class, 'id_pemilik');
    }
}
