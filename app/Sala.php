<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sala extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'NSala', 'SPassword','Celes',
    ];

}
