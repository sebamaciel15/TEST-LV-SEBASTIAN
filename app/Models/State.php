<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;


    //relacion uno a muchos inversa.
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }


    //relacion uno a muchos
    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }
}
