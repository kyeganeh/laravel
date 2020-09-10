<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $dir = 'images/';
    //
    protected $fillable = ['title','content','path'];

    public function User()
    {
        return $this->belongsTo('User');
    }

    // Accessors
    public function getPathAttribute($value){
        return $this->dir.$value;
    }
}
