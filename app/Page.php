<?php

namespace vblog;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
	protected $fillable = ['title','link','content'];

    public function comments()
    {
    	return $this->morphMany('vblog\Comment','commentable');
    }

    public function blog()
    {
    	return $this->belongsTo('vblog\Blog');
    }
}
