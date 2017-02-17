<?php

namespace App;

use App\Base;
use Carbon\Carbon;

class Post extends Base
{
    public function comments(){

        return $this->hasMany(Comment::class);
    }

     public function user(){
        return $this->belongsTo(User::class);
    }


    public function addComment($body){

        $this->comments()->create(compact('body'));
        
    }

    public function scopeFilter($query,$clause){

         if($month = $clause["month"]){
            $query->whereMonth('created_at',Carbon::parse($month)->month);
        }

        if($year = $clause["year"]){
            $query->whereYear('created_at',$year);
        }
    }
}
