<?php

namespace App\Models\inventario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inventario extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relacion uno a muchos inversa
    public function productos() : BelongsTo
    {
        return $this->BelongsTo(Producto::class);
    }
    //Relacion uno a muchos inversa
    public function almacenes() : BelongsTo
    {
        return $this->BelongsTo(Almacen::class);
    }
}
