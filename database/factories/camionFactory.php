<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Camiones;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Marca>
 */
class camionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $camion = Camiones::class;

    public function definition(): array
    {
        return [
            'nombre' => $this,
            'imagen' => $this,
            'disponibilidad' => $this
        ];
    }
}
