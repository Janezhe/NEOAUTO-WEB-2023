<?php

namespace App\Models;

use App\Models\Tipo;
use App\Models\Moto;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Traccion;
use App\Models\Condicion;
use App\Models\Ubicacion;
use App\Models\Carroceria;
use App\Models\Combustible;
use App\Models\Transmision;
use App\Models\Camiones;
use App\Models\Noticia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehiculo extends Model
{
    use HasFactory;
    protected $table = 'vehiculo';
    protected $fillable = [
        'placa',
        'descripcion',
        'color',
        'motor',
        'potencia',
        'largo',
        'ancho',
        'alto',
        'peso',
        'cilindros',
        'cilindrada',
        'puertas',
        'precio',
        'kilometraje',
        'fecha_fabricacion',
        'fecha_modelo',
        'imagenes_carpeta',
        // 'tipo_id',
        'marca_id',
        'modelo_id',
        'carroceria_id',
        'transmision_id',
        'combustible_id',
        'traccion_id',
        'condicion_id',
        'ubicacion_id',
        'moto_id',
        'camion_id',
        'noticia_id',
    ];

    // public function tipo()
    // {
    //     return $this->belongsTo(Tipo::class, 'tipo_id');
    // }

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'marca_id');
    }

    public function modelo()
    {
        return $this->belongsTo(Modelo::class, 'modelo_id');
    }

    public function carroceria()
    {
        return $this->belongsTo(Carroceria::class, 'carroceria_id');
    }

    public function combustible()
    {
        return $this->belongsTo(Combustible::class, 'combustible_id');
    }

    public function condicion()
    {
        return $this->belongsTo(Condicion::class, 'condicion_id');
    }

    public function traccion()
    {
        return $this->belongsTo(Traccion::class, 'traccion_id');
    }

    public function transmision()
    {
        return $this->belongsTo(Transmision::class, 'transmision_id');
    }

    public function ubicacion()
    {
        return $this->belongsTo(Ubicacion::class, 'ubicacion_id');
    }
    public function moto()
    {
        return $this->belongsTo(Moto::class, 'moto_id');
    }
    public function camiones()
    {
        return $this->belongsTo(Camiones::class, 'camion_id');
    }
    public function noticia()
    {
        return $this->belongsTo(Noticia::class, 'noticia_id');
    }
}
