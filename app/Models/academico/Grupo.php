<?php

namespace App\Models\academico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
}
