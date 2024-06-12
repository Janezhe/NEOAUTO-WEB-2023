<?php

namespace App\Models;

use App\Models\Tipo;
use App\Models\Marca;
use App\Models\Moto;
use App\Models\Vehiculo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Modelo extends Model
{
    use HasFactory;
    protected $table = 'vehiculo_modelo';

    public function vehiculo()
    {
        return $this->hasMany(Vehiculo::class, 'modelo_id');
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'marca_id', 'id');
    }
    public function tipo()
    {
        return $this->belongsTo(Tipo::class, 'tipo_id', 'id');
    }
    public function moto()
    {
        return $this->belongsTo(Tipo::class, 'moto_id', 'id');
    }
}
