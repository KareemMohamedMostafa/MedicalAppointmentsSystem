<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';

    // One to Many Relation
    public function comments()
    {
        return $this->hasMany('App\Comment')->orderby('id', 'desc');
    }

    // Many to One Relation
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
