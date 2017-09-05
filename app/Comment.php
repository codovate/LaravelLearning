<?php

namespace App;

class Comment extends Model
{
    // $comments->post;  //comment can belong to a post
    public function post() {

    	return $this->belongsTo(Post::class);
    }

    // $comments->user; //comment can belong to a user
    public function user() {
    	
    	return $this->belongsTo(User::class);
    }
}
