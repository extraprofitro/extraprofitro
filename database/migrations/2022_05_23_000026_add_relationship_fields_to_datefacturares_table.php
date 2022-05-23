<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToDatefacturaresTable extends Migration
{
    public function up()
    {
        Schema::table('datefacturares', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_6655013')->references('id')->on('users');
        });
    }
}
