<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Moto;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Marca>
 */
class motoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $moto = Moto::class;

    public function definition(): array
    {
        return [
            'nombre' => $this,
            'imagen' => $this,
            'disponibilidad' => $this
        ];
    }
}
