<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\ubicacion\Country::create([
                'name' => 'Colombia',
        ]);

        \App\Models\ubicacion\Country::create([
            'name' => 'Venezuela',
        ]);
        \App\Models\ubicacion\Country::create([
            'name' => 'Chile',
        ]);
        \App\Models\ubicacion\Country::create([
            'name' => 'Haiti',
        ]);
        \App\Models\ubicacion\Country::create([
            'name' => 'Otros',
        ]);

    }
}
