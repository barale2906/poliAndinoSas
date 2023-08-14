<?php

namespace App\Models\ubicacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Area extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * Relación muchos a muchos.
     * áreas que componen la sede
     */
    public function sedes(): BelongsToMany
    {
        return $this->belongsToMany(Sede::class);
    }

    /**
     * Relación muchos a muchos.
     * áreas que componen la sede
     */
    public function horarios(): BelongsToMany
    {
        return $this->belongsToMany(Horario::class);
    }
}
