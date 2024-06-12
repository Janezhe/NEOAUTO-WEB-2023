<?php

namespace App\Models;

use App\Models\Modelo;
use App\Models\Vehiculo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Marca extends Model
{
    use HasFactory;
    protected $table = 'vehiculo_marca';

    public function vehiculo()
    {
        return $this->hasMany(Vehiculo::class, 'tipo_id', 'id');
    }

    public function modelo()
    {
        return $this->hasMany(Modelo::class, 'tipo_id', 'id');
    }
}
