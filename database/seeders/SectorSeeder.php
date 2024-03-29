<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\ubicacion\Sector::create([
            'name' => 'Soacha',
            'state_id' => 1,
        ]);
        \App\Models\ubicacion\Sector::create([
            'name' => 'Chía',
            'state_id' => 1,
        ]);
        \App\Models\ubicacion\Sector::create([
            'name' => 'Cajicá',
            'state_id' => 1,
        ]);
        \App\Models\ubicacion\Sector::create([
            'name' => 'Bogotá',
            'state_id' => 2,
        ]);
        \App\Models\ubicacion\Sector::create([
            'name' => 'Pereira',
            'state_id' => 3,
        ]);
        \App\Models\ubicacion\Sector::create([
            'name' => 'Pasto',
            'state_id' => 4,
        ]);
        \App\Models\ubicacion\Sector::create([
            'name' => 'Bucaramanga',
            'state_id' => 5,
        ]);
        \App\Models\ubicacion\Sector::create([
            'name' => 'Malaga',
            'state_id' => 5,
        ]);
    }

}
