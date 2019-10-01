<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scope extends Model
{
    protected $fillable = [
        'code', 'text',
    ];

    public function package()
    {
        return $this->belongsToMany('App\Package', 'package_scope');
    }
}
