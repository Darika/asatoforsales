<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = [
        'id','name'
    ];

    public function region() {
        return $this->hasMany('App\Region');
    }

}
