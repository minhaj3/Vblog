<?php

namespace vblog;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','description','published_at'];

    public function comments()
    {
    	return $this->morphMany('vblog\Comment','commentable');
    }

    public function categories()
    {
    	return $this->belongsToMany('vblog\Category')->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo('vblog\User');
    }

    public function blog()
    {
    	return $this->belongsTo('vblog\Blog');
    }
}
