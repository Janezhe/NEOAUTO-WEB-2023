<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Noticia;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Marca>
 */
class noticiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $noticia = Noticia::class;

    public function definition(): array
    {
        return [
            'nombre' => $this,
            'imagen' => $this,
            'disponibilidad' => $this
        ];
    }
}
