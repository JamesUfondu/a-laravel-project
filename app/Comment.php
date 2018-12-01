<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded=['id'];
    protected $table='comments';
  // add all other fields
    Public function Post (){
      $this->belongsTo('App/Post');
    }  
}
