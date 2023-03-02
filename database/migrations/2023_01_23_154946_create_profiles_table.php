<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('phone');
            $table->string('email');
            $table->string('image');
            $table->string('level');
            $table->string('uid');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('game_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;
            $table->foreign('game_id')->references('id')->on('games')->onDelete('cascade');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
};
