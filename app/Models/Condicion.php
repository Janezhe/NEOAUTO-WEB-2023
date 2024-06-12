<?php

namespace App\Models;

use App\Models\Vehiculo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Condicion extends Model
{
    use HasFactory;
    protected $table = 'vehiculo_condicion';

    public function vehiculo()
    {
        return $this->hasMany(Vehiculo::class, 'condicion_id', 'id');
    }
}