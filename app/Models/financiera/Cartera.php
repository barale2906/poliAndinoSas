<?php

namespace App\Models\financiera;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Cartera extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relacion uno a muchos inversa
    public function matricula() : BelongsTo
    {
        return $this->BelongsTo(Matricula::class);
    }

    //Relacion uno a muchos inversa
    public function conceptoPago() : BelongsTo
    {
        return $this->BelongsTo(ConceptoPago::class);
    }

    //Relacion uno a muchos inversa
    public function estadoCartera() : BelongsTo
    {
        return $this->BelongsTo(EstadoCartera::class);
    }

    /**
     * Obtener Usuario a través de la matricula.
     */
    public function deudor(): HasOneThrough
    {
        return $this->hasOneThrough(User::class, Matricula::class);
    }

    /**
     * Relación muchos a muchos.
     * recibos de pago por pagos de cartera
     */
    public function recibos(): BelongsToMany
    {
        return $this->belongsToMany(ReciboPago::class);
    }

}
