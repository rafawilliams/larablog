<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
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