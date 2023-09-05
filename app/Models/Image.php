<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['deleted.at'];

    protected $fillable = [
        'name',
        'path',
        'product_id'
    ];

    // UNA IMAGEN PERTENECE A UN PRODUCTO
    public function Products(){
        return $this->hasOne(Product::class);
    }
}
