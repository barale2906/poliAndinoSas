<?php

namespace App\Models\financiera;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ConceptoPago extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relación uno a muchos
    public function carteras(): HasMany
    {
        return $this->hasMany(Cartera::class);
    }

    /**
     * Relación muchos a muchos.
     * conceptos de pago por pagos de cartera
     */
    public function recibos(): BelongsToMany
    {
        return $this->belongsToMany(ReciboPago::class);
    }
}
