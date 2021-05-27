<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;



    //relacion mucho a muchos
    public function menus()
    {
        return $this->hasMany('App\Models\Menu');
    }
}
