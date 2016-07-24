<?php
namespace socnetwork\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = 'likbale';


    public function likeable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo('socnetwork\Models\User', 'user_id');
    }
}