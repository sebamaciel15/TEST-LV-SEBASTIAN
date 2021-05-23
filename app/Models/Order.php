<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    //relacion uno a muchos inversa
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function client()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function states()
    {
        return $this->belongsToMany('App\Models\State');
    }

    public function menu()
    {
        return $this->belongsTo('App\Models\Menu');
    }

    //relacion uno a uno polimorfica
    public function image()
    {
        return $this->morphTo(Image::class, 'imageable');
    }
}
