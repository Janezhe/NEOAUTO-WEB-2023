<?php

namespace App\Models;

use App\Models\Vehiculo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ubicacion extends Model
{
    use HasFactory;
    protected $table = 'vehiculo_ubicacion';

    public function vehiculo()
    {
        return $this->hasMany(Vehiculo::class, 'ubicacion_id');
    }
}