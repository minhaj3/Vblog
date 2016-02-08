<?php

namespace vblog;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title','description'];

    public function posts()
    {
    	$this->hasMany('vblog\Post');
    }

    public function pages()
    {
    	$this->hasMany('vblog\Page');
    }

    public function theme()
    {
    	$this->hasOne('vblog\Theme');
    }

    public function user()
    {
    	$this->belongsTo('vblog\User');
    }
}
