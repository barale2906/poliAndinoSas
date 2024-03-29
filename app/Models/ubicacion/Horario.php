<?php

namespace App\Models\ubicacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Horario extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * Relación muchos a muchos.
     * áreas que componen la sede
     */
    public function areas(): BelongsToMany
    {
        return $this->belongsToMany(Area::class);
    }

    /**
     * Relación muchos a muchos.
     * Grupos de este horario
     */
    public function grupos(): BelongsToMany
    {
        return $this->belongsToMany(Grupo::class);
    }

    //Relación uno a muchos
    public function asistencias(): HasMany
    {
        return $this->hasMany(Asistencia::class);
    }
}
