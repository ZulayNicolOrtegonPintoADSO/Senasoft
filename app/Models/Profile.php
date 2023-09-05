<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'sexo',
        'birthdate',
        'facebook',
        'instagram',
        'linkedin',
        'user_id'
    ];

    // UN PERFIL PERTENECE A UN USUARIO
    public function user(){
        // hasOne, que me retorne uno
        return $this->hasOne(User::class);
    }
}
