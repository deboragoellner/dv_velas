<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SensorDeboraVitoria extends Model
{
    use HasFactory;
    protected $table = "sensordeboravitoria";

    protected $fillable = [
        'nome', 'contador'
    ];
}
