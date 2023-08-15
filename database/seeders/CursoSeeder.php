<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\academico\Curso::create([
            'name'              =>'Técnico Mantenimiento De Motocicletas',
            'type'              =>'Técnico',
            'duration_hours'    =>159,
            'duration_months'   =>6
        ]);

        \App\Models\academico\Curso::create([
            'name'              =>'Técnico En Mecánica De Vehículos Automotores',
            'type'              =>'Técnico',
            'duration_hours'    =>159,
            'duration_months'   =>6
        ]);

        \App\Models\academico\Curso::create([
            'name'              =>'Instalación De Car Audio Y Alarmas',
            'type'              =>'Práctico',
            'duration_hours'    =>159,
            'duration_months'   =>6
        ]);
        \App\Models\academico\Curso::create([
            'name'              =>'Inyección Electrónica Y Alto Cilindraje De Motos',
            'type'              =>'Práctico',
            'duration_hours'    =>159,
            'duration_months'   =>6
        ]);
    }
}
