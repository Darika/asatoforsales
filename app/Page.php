<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'title', 'content', 'meta', 'url', 'active', 'top_menu', 'bottom_menu'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
