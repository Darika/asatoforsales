<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $fillable = [
        'name', 'parent_id'
    ];

    public function ad()
    {
        return $this->belongsToMany('App\Ad', 'ads_fields');
    }
}
