<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salas extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['NSalas','NPlayers','Status'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['SPassword'];
}
