<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usersToSala extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'UsEmail', 'NSala',
    ];
}
