<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MultiplayerTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Main Rooms
        Schema::create('salas', function (Blueprint $table) {
            $table->id();
            $table->integer('NSalas')->unique();
            $table->integer('SPassword');
            $table->integer('NPlayers');
            $table->string('Status'); // wating / Ingame
            $table->timestamps();
        });
        //Room max players
        Schema::create('sala', function (Blueprint $table) {
            $table->id();
            $table->integer('NSala')->unique();
            $table->string('P1'); //Host
            $table->string('P2')->nullable();
            $table->string('P3')->nullable();
            $table->string('P4')->nullable();
            $table->string('P5')->nullable();
            $table->string('P6')->nullable();
            $table->timestamps();

            $table-foreing('NSala')
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
        Schema::dropIfExists('salas');
        Schema::dropIfExists('sala');
    }
}
