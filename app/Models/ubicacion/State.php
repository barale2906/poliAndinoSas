<?php

namespace App\Models\ubicacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class State extends Model
{
    use HasFactory;

    protected $fillable =['name', 'status'];

    //Relacion uno a muchos inversa
    public function sector() : BelongsTo
    {
        return $this->BelongsTo(Country::class);
    }

    //Relación uno a muchos
    public function sectors(): HasMany
    {
        return $this->hasMany(Sector::class);
    }

    /**
     * Relación uno  muchos a través de
     * Obtener todas las sedes para este departamento.
     */
    public function sedes(): HasManyThrough
    {
        return $this->hasManyThrough(Sede::class, Sector::class);
    }
}
