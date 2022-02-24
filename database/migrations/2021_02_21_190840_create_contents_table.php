<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('release');
            $table->boolean('is_serial');
            $table->text('description');
            $table->string('genre');
            $table->string('country');
            $table->string('language');
            $table->integer('user_age');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
