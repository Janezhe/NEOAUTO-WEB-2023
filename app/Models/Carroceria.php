<?php

namespace App\Models;

use App\Models\Tipo;
use App\Models\Vehiculo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Carroceria extends Model
{
    use HasFactory;
    protected $table = 'vehiculo_carroceria';

    public function vehiculo()
    {
        return $this->hasMany(Vehiculo::class, 'carroceria_id');
    }

    public function tipo() {
        return $this->belongsTo(Tipo::class, 'tipo_id', 'id');
    }
}