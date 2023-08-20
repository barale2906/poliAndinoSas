<?php

namespace App\Models\ubicacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sede extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relacion uno a muchos inversa
    public function sector() : BelongsTo
    {
        return $this->BelongsTo(Sector::class);
    }

    /**
     * Relación muchos a muchos.
     * áreas que componen la sede
     */
    public function areas(): BelongsToMany
    {
        return $this->belongsToMany(Area::class);
    }

    //Relación uno a muchos
    public function cierres(): HasMany
    {
        return $this->hasMany(CierreCaja::class);
    }

    //Relación uno a muchos
    public function recibos(): HasMany
    {
        return $this->hasMany(ReciboPago::class);
    }

}
