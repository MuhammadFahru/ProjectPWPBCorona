<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['title','headline_picture','content','author'];
}
