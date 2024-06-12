<?php

namespace App\Models;

use App\Models\Modelo;
use App\Models\Vehiculo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Moto extends Model
{
    use HasFactory;
    protected $table = 'vehiculo_moto';

    public function vehiculo()
    {
        return $this->hasMany(Vehiculo::class, 'moto_id');
    }

    public function modelo()
    {
        return $this->hasMany(Modelo::class, 'tipo_id', 'id');
    }
}
