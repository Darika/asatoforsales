<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'price', 'name', 'active'
    ];

    public function scope()
    {
        return $this->belongsToMany('App\Scope', 'package_scope');
    }

    public function user()
    {
        return $this->belongsToMany('App\User', 'user_package');
    }
}
