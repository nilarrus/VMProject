<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserToSalas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_To_Salas', function (Blueprint $table) {
            $table->id();
            $table->string('UsEmail')->unique();
            $table->String('NSala')->unique();
            $table->timestamps();

            $table->foreign('UsEmail')
            ->references('email')
            ->on('users')
            ->onDelete('cascade');

            $table->foreign('NSala')
            ->references('NSala')
            ->on('salas')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usersToSalas');
    }
}
