<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];  // esto es para que se permita hacer el POST de la Imagen

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
