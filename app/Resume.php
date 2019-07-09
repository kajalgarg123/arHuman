<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    //
    protected $fillable = [
    	'id','first_name','last_name','contact','email','resume',
    ];
}
