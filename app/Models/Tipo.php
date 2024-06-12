<?php

namespace App\Models;

use App\Models\Modelo;
// use App\Models\Vehiculo;
use App\Models\Carroceria;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tipo extends Model
{
    use HasFactory;
    protected $table = 'vehiculo_tipo';

    // public function vehiculo()
    // {
    //     return $this->hasMany(Vehiculo::class, 'tipo_id', 'id');
    // }

    public function modelo()
    {
        return $this->hasMany(Modelo::class, 'tipo_id', 'id');
    }

    public function carroceria()
    {
        return $this->hasMany(Carroceria::class, 'tipo_id', 'id');
    }
}
