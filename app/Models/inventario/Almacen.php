<?php

namespace App\Models\inventario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Almacen extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relación uno a muchos
    public function inventarios(): HasMany
    {
        return $this->hasMany(Inventario::class);
    }

    //Relacion uno a muchos inversa
    public function sedes() : BelongsTo
    {
        return $this->BelongsTo(Sede::class);
    }

}
