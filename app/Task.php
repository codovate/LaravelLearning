<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //$query is: App\Task::incomplete();
    public function scopeIncomplete($query) 
    {                           
    	return $query->where('completed', 0);
    }

}
