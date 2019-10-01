<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{

    protected $fillable = [
        'name'
    ];

    public function ad() {
        return $this->hasOne('App\Ad');
    }

    public function region() {
        return $this->belongsTo('App\Region');
    }

}
