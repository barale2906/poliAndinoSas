<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Ing. Alexander Barajas Vargas',
            'email' => 'alexanderbarajas@gmail.com',
        ]);

        $this->call([
            CountrySeeder::class,
            StateSeeder::class,
            SectorSeeder::class,
            SedeSeeder::class,
            HorarioSeeder::class,
            AreaSeeder::class,
            CursoSeeder::class
        ]);
    }
}
