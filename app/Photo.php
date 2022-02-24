<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Photo extends Model
{
    protected $fillable = ['path'];
    protected $baseDir  = 'banners/photos';

    public function banner(){
        return $this->hasMany(Banner::class);
    }

    public static function formFrom(UploadedFile $file)
    {
        $photo = new static();
        $name = time() . $file->getClientOriginalName();
        $photo->path = $photo->baseDir . DIRECTORY_SEPARATOR . $name;
        $file->move($photo->baseDir, $name);
        return $photo;
    }
}
