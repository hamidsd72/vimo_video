<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    public function content(){
        return $this->belongsTo(Content::class);
    }
}
