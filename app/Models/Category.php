<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //relacion muchos a muchos
    public function menus()
    {
        return $this->belongsToMany('App\Models\Menu');
    }

    //relacion mucho a muchos inversa

}
