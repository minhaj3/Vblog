<?php

namespace vblog;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title','description','excerpt'];

    public function posts()
    {
    	return $this->hasMany('vblog\Post');
    }

    public function pages()
    {
    	return $this->hasMany('vblog\Page');
    }

    public function theme()
    {
    	return $this->hasOne('vblog\Theme');
    }

    public function user()
    {
    	return $this->belongsTo('vblog\User');
    }

    public function setTitleAttribute($value){
    	$this->attributes['title'] = $value;

    	if(! $this->exists){
    		$this->attributes['slug'] = str_slug($value);
    	}
    }

    // public function setDescriptionAttribute($value){
    // 	$this->attributes['description'] = $value;

    // 	if(! $this->exists){
    // 		$this->attributes['short'] = str_limit($value,50);
    // 	}
    // }
}
