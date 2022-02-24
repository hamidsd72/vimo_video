<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Photo;

class Banner extends Model
{
    protected $fillable = [
        'street',
        'city',
        'country',
        'zip',
        'state',
        'price',
        'description'
    ];

    public function photos(){
        return $this->hasMany(Photo::class);
    }

//    public function scopeLocatedAt($query, $zip, $street)
//    {
//        $street = str_replace('-',' ',$street);
//        return $query->where(compact('zip', 'street'));
//    }

    public static function locatedAt($zip, $street)
    {
        $street = str_replace('-',' ',$street);
        return static::where(compact('zip', 'street'))->first();
    }

    public function getPriceAttribute($price)
    {
        return '$' . number_format($price);
    }

    public function addPhoto(Photo $photo)
    {
        return $this->photos()->save($photo);
    }
}
