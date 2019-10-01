<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{

    protected $fillable = [
        'action', 'text'
    ];

    public function user()
    {
        return $this->belongsToMany('App\User', 'action_user');
    }

}
