<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapsKabKota extends Model
{
    use HasFactory;
    protected $table = 'maps_kab_kota';
    protected $fillable = [
        'latitude',
        'longitude',
        'namaTempat',
    ];
}
