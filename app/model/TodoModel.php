<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class TodoModel extends Model
{
   protected $table = "todo";
    protected $fillable = ['user_id','title','completed'];
   function user()
   {
       return $this->belongsTo('App\User');
   }
}
