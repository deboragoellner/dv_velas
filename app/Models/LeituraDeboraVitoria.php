<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeituraDeboraVitoria extends Model
{
    use HasFactory;
    protected $table = "leituradeboravitoria";

    protected $fillable = [
        'data_leitura', 'hora_leitura', 'valor_sensor','sensor_id', 'mac_id'
    ];

    public function sensor(){
        return $this->belongsTo(Sensor::class,'sensor_id','nome');
    }

    public function mac(){
        return $this->belongsTo(Mac::class,'mac_id','id');
    }
}
