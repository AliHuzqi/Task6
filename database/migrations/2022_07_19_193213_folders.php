<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Folders extends Migration
{
    public function up()
    {
        Schema::create('folders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('add_course');
            $table->string('category');
            $table->string('detailes_course');
            $table->string('num_hours');
            $table->string('coach');
            $table->dateTime('start_date');
            $table->boolean('status')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('folders');
    }
}
