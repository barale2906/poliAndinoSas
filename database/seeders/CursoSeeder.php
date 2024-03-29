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
            'tipo'              =>'Técnico',
            'duracion_horas'    =>159,
            'duracion_meses'   =>6
        ]);

        \App\Models\academico\Curso::create([
            'name'              =>'Técnico En Mecánica De Vehículos Automotores',
            'tipo'              =>'Técnico',
            'duracion_horas'    =>159,
            'duracion_meses'   =>6
        ]);

        \App\Models\academico\Curso::create([
            'name'              =>'Instalación De Car Audio Y Alarmas',
            'tipo'              =>'Práctico',
            'duracion_horas'    =>159,
            'duracion_meses'   =>6
        ]);
        \App\Models\academico\Curso::create([
            'name'              =>'Inyección Electrónica Y Alto Cilindraje De Motos',
            'tipo'              =>'Práctico',
            'duracion_horas'    =>159,
            'duracion_meses'   =>6
        ]);
    }
}
