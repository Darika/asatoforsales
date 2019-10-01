<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'type', 'title', 'preview', 'content', 'meta', 'url', 'active'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
