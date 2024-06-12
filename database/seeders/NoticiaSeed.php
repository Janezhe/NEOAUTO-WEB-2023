<?php

namespace Database\Seeders;
use App\Models\Noticia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoticiaSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Noticia::factory(50)->create();
    }
}
