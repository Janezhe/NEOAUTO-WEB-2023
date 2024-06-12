<?php

namespace App\Models;

use App\Models\Vehiculo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transmision extends Model
{
    use HasFactory;
    protected $table = 'vehiculo_transmision';
    
    public function vehiculo()
    {
        return $this->hasMany(Vehiculo::class, 'transmision_id');
    }
}