<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersPhotosTable extends Migration
{
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('banner_id');
            $table->foreign('banner_id')->references('id')->on
            ('banners')->onDelete('cascade')->onUpdate('cascade');
            $table->string('path');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('photos');
    }
}
