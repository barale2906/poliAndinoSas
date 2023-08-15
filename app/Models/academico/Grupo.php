<?php

namespace App\Models\academico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Grupo extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * Relación muchos a muchos.
     * Grupos de este modulo
     */
    public function modulos(): BelongsToMany
    {
        return $this->belongsToMany(Modulo::class);
    }

    /**
     * Relación muchos a muchos.
     * Horarios de este horario
     */
    public function horarios(): BelongsToMany
    {
        return $this->belongsToMany(Horario::class);
    }

    /**
     * Relación muchos a muchos.
     * Estudiantes de este grupo
     */
    public function estudiantes(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    //Relación uno a muchos
    public function asistencias(): HasMany
    {
        return $this->hasMany(Asistencia::class);
    }
}
