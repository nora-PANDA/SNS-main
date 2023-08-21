<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['post', 'user_id']; //カラムのホワイトリスト

    public function users(){
      return $this->belongsTo('App\User');
    }

    //public function users(){
      //return $this->hasMany('App\User');
    //}
}
