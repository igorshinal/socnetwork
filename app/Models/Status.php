<?php

namespace socnetwork\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'statuses';

    protected $fillable = [
        'body'
    ];

    public function user()
    {
        return $this->belongsTo('socnetwork\Models\User', 'user_id');
    }

    public function scopeNotReply($query)
    {
        return $query->whereNull('parent_id');
    }

    public function replies()
    {
        return $this->hasMany('socnetwork\Models\Status', 'parent_id');
    }
}