<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ //Que datos de la tabla se pueden llamar en modo masivo
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
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    //RELACIONES CON OTRAS TABLAS


    // UN USUARIO TIENE UN PERFIL 
    public function profile() {
        // hasOne, que me retorne uno
        return $this->hasOne(Profile::class);
    }

    // UN USUARIO TIENE MUCHOS PRODUCTOS
    public function products() {
        // hasMany, que me retorne muchas
        return $this->hasMany(Product::class);
    }

    
}
