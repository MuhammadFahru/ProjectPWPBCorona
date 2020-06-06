<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Hospital extends Model 
{   
    
    protected $fillable = [

        'hospital_name',
        'province',
        'address',
        'phone_number',
        'logo'     
    ];

}
