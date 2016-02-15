<?php

namespace vblog;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $fillable = ['name','link'];

    public function blog()
    {
    	return $this->belongsTo('vblog\Blog');
    }
}
