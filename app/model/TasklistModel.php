<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class TasklistModel extends Model
{
    protected $table = 'tasklist';

    protected $fillable = [
        'task', 'group_id', 'description','user_id','completed',
    ];

    public function taskgroup()
    {
        return $this->belongsTo('App\model\TaskgroupModel', 'group_id');
    }

    public function user()
    {
        return $this->belongsTo('App\model\User','user_id');
    }
}
