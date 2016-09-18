<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';

    protected $fillable = ['id', 'content', 'story_points', 'business_value', 'is_completed'];

    public $timestamps = false;
}
