<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sala extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usersToSalas', function (Blueprint $table) {
            $table->id();
            $table->string('UsEmail')->unique();
            $table->integer('NSala');
            $table->timestamps();

            $table->foreign('UsEmail')
            ->references('email')
            ->on('users')
            ->onDelete('cascade');
            $table->foreign('NSala')
            ->references('NSalas')
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
