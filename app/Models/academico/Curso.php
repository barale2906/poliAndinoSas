<?php

namespace App\Models\academico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Curso extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relación uno a muchos
    public function modulos(): HasMany
    {
        return $this->hasMany(Modulo::class);
    }

    /**
     * Relación uno  muchos a través de
     * Obtener todos los grupos para este curso.
     */
    public function grupos(): HasManyThrough
    {
        return $this->hasManyThrough(Modulo::class, Grupo::class);
    }

}
