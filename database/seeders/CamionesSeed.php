<?php

namespace Database\Seeders;
use App\Models\Camiones;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CamionesSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Camiones::factory(50)->create();
    }
}