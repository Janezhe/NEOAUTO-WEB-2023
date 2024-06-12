<?php

namespace Database\Seeders;
use App\Models\Marca;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarcaSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Marca::factory(50)->create();
    }
}
