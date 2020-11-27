<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApiUsers extends Model
{
    protected $fillable = [
    	'name', 
    	'age', 
    	'points', 
    	'address'
    ];


    /*
    |
    |	To make sure age and points return as integer
    |
    |*/

    protected $casts = [
    	'age' 	  => 'integer', 
    	'points'  => 'integer'
    ];
}
