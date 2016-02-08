<?php

namespace vblog;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function posts()
    {
    	$this->belongsToMany('vblog\Post')->withTimestamps();
    }
}
