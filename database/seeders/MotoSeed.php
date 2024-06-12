<?php

namespace Database\Seeders;
use App\Models\Moto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotoSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Moto::factory(50)->create();
    }
}
