<?php

namespace App\Models;

use App\Models\Vehiculo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Traccion extends Model
{
    use HasFactory;
    protected $table = 'vehiculo_traccion';

    public function vehiculo()
    {
        return $this->hasMany(Vehiculo::class, 'traccion_id', 'id');
    }
}
