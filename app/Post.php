<?php

namespace App;

use App\Base;


class Post extends Base
{
    public function comments(){

        return $this->hasMany(Comment::class);
    }


    public function addComment($body){

        $this->comments()->create(compact('body'));
        
    }
}
