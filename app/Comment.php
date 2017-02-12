<?php

namespace App;


class Comment extends Base
{
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
