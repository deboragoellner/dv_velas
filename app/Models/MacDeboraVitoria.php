<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MacDeboraVitoria extends Model
{
    use HasFactory;
    protected $table = "macdeboravitoria";

    protected $fillable = [
        'nome', 'contador'
    ];
}
