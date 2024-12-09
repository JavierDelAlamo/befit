<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    //podemos añadir campos masivos
    protected $guarded =[];
    //Creamos las relaciones 1 a muchos.
    public function posts() : HasMany{
        return $this->hasMany(Post::class);
    }
}
