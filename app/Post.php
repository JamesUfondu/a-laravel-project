<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded=['id'];
    protected $table='post';
    public function Comment(){
      return $this->hasMany('App\Comment');
    }
}