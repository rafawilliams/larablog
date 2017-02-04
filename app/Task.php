<?php

namespace App;



class User extends Eloquent
{
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'body', 'completed',
    ];

    public function scopedIncomplete($query){

    }
}