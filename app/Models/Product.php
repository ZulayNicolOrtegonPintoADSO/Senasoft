<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes; //hacer referencia a los softDeletes de las migraciones

    protected $guarded = ['deleted.at'];

    protected $fillable =  [
        'title',
        'description',
        'value',
    ];

    // UN PRODUCTO TIENE MUCHAS IMÁGENES
    public function images()
    {
        // hasMany, que me retorne muchas
        return $this->hasMany(Image::class);
    }
}
