<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class TaskgroupModel extends Model
{
    protected $table = 'taskgroup';

    protected $fillable = [
        'title', 'due_date',
    ];

     public function task()
       {
           return $this->hasMany('App\model\TasklistModel', 'group_id');
       }
}
