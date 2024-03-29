<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\ubicacion\State::create([
            'name' => 'Cundinamarca',
            'country_id' => 1,
        ]);

        \App\Models\ubicacion\State::create([
            'name' => 'Bogotá D.C.',
            'country_id' => 1,
        ]);
        \App\Models\ubicacion\State::create([
            'name' => 'Risaralda',
            'country_id' => 1,
        ]);
        \App\Models\ubicacion\State::create([
            'name' => 'Nariño',
            'country_id' => 1,
        ]);
        \App\Models\ubicacion\State::create([
            'name' => 'Santander',
            'country_id' => 1,
        ]);
    }
}
