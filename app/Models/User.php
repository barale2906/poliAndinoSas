<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function adminlte_desc(){
        return 'Superusuario';
    }

    public function adminlte_image()
    {
        return 'https://picsum.photos/300/300';
    }

    public function adminlte_profile_url()
    {
        return 'user/profile';
    }

    //Relación uno a muchos
    public function asistencias(): HasMany
    {
        return $this->hasMany(Asistencia::class);
    }

    //Relación uno a muchos
    public function asistenciaDetalle(): HasMany
    {
        return $this->hasMany(AsistenciaDetalle::class);
    }

    //Relación uno a muchos
    public function notaDetalle(): HasMany
    {
        return $this->hasMany(NotaDetalle::class);
    }

    //Relación uno a muchos
    public function matriculados(): HasMany
    {
        return $this->hasMany(Matricula::class);
    }

    //Relación uno a muchos creadores matriculas
    public function creadores(): HasMany
    {
        return $this->hasMany(Matricula::class);
    }

    //Relación uno a muchos comerciales de matriculas
    public function comerciales(): HasMany
    {
        return $this->hasMany(Matricula::class);
    }

    //Relación uno a muchos cierres de caja
    public function cierres(): HasMany
    {
        return $this->hasMany(CierreCaja::class);
    }

    //Relación uno a muchos recibos de pago
    public function creaRecibo(): HasMany
    {
        return $this->hasMany(ReciboPago::class);
    }

    //Relación uno a muchos pagadores
    public function pagador(): HasMany
    {
        return $this->hasMany(ReciboPago::class);
    }

    /**
     * Relación muchos a muchos.
     * usuarios profesores grupos
     */
    public function grupos(): BelongsToMany
    {
        return $this->belongsToMany(Grupo::class);
    }


}
