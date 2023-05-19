<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leitura extends Model
{
    use HasFactory;
    protected $table = "leitura";

    protected $fillable = [
        'data_leitura', 'hora_leitura', 'valor_sensor','sensordeboravitoria_id', 'macdeboravitoria_id'
    ];

    public function sensordeboravitoria(){
        return $this->belongsTo(SensorDeboraVitoria::class,'sensordeboravitoria_id','id');
    }

    public function macdeboravitoria(){
        return $this->belongsTo(MacDeboraVitoria::class,'macdeboravitoria_id','id');
    }
}
