<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Marca;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Marca>
 */
class marcaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $marca = Marca::class;

    public function definition(): array
    {
        return [
            'nombre' => $this,
            'imagen' => $this,
            'disponibilidad' => $this
        ];
    }
}
