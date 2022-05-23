<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatefacturaresTable extends Migration
{
    public function up()
    {
        Schema::create('datefacturares', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nume')->nullable();
            $table->integer('cui')->nullable();
            $table->string('numar_inregistrare')->nullable();
            $table->string('adresa')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
