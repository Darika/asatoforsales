<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = [
        'name'
    ];

    public function city() {
        return $this->hasMany('App\City');
    }

    public function district() {
        return $this->belongsTo('App\District');
    }

}
