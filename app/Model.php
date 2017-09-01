<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    //FILLABLE PROPERTY : Allow us to give only the names of the fields that we are ok to mass assign.
    //protected $fillable = ['title', 'body' ]; 
    protected $guarded = []; 

}
