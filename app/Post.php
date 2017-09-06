<?php

namespace App;

use Carbon\Carbon;

class Post extends Model 
{
	
	//No need to use guarded as we have that definded in the Model we now extending.
	public function comments() {

		return $this->hasMany(Comment::class);
	}


	public function addComment($body){

		//Add comment to a post
        // Comment::create([
        //     'body' => $body,
        //     'post_id' => $this->id
        // ]);

		$this->comments()->create(compact('body'));
	}


	// $posts->user; //a post belong to a user
    public function user() {
    	
    	return $this->belongsTo(User::class);
    }


    public function scopeFilter($query, $filters) {

        //where we have get request with parameters month
        if( $month = $filters['month'] ) {

            // Carbon::parse($month)->month  --> converts to month number. 
            $query->whereMonth('created_at', Carbon::parse($month)->month );
        }

        if( $year = $filters['year'] ) {
            
            $query->whereYear('created_at', $year );
        }

    }



}
