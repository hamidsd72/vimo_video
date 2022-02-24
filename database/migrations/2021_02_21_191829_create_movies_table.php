<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('content_id');
            $table->foreign('content_id')->references('id')->on
            ('contents')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name');
            $table->string('persian_name');
            $table->text('description');
            $table->integer('number');
            $table->string('season');
            $table->string('path');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
