<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description', 'price'];

    /* public function getRouteKeyName()
    {
        return "slug";
    } */

    //relacion uno a muchos
    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }

    //relacion uno a uno polimorfica
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    //relacion mucho a muchos
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
        /* return Category::find($this->category_id)->name; */
    }
}
