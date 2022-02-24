<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public function movies(){
        return $this->hasMany(Movie::class);
    }
    public function pictures(){
        return $this->hasMany(Picture::class);
    }
}
