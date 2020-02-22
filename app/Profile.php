<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/DUYDdUyrKBJvSpaU5MNhkGAHaJVodRzjA2vQ27D2.png';
        return '/storage/' .  $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()   // para informar que user pertenece a la tabla Users
    {
        return $this->belongsTo(User::class);
    }
}
