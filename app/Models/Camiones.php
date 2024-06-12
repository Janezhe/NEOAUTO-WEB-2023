<?php

namespace App\Models;

use App\Models\Modelo;
use App\Models\Vehiculo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Camiones extends Model
{
    use HasFactory;
    protected $table = 'vehiculo_camiones';

    public function vehiculo()
    {
        return $this->hasMany(Vehiculo::class, 'camiones_id');
    }

    public function modelo()
    {
        return $this->hasMany(Modelo::class, 'tipo_id', 'id');
    }
}
