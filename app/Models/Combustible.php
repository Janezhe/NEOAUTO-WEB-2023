<?php

namespace App\Models;

use App\Models\Vehiculo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Combustible extends Model
{
    use HasFactory;
    protected $table = 'vehiculo_combustible';

    public function vehiculo () {
        return $this->hasMany(Vehiculo::class, 'combustible_id');
    }
}