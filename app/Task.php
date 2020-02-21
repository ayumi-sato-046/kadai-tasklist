<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Task extends Model
{
    protected $fillable = ['user_id'];

    public function tasks()
    {
        return $this->belongsTo(Task::class);
    }
}

