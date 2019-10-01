<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable = [
        'unique', 'title', 'address', 'date_start', 'date_end', 'vip', 'top', 'content', 'price'
        ];

    public function user() {

        return $this->belongsTo('App\User');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function city() {
        return $this->belongsTo('App\City');
    }

    public function field()
    {
        return $this->belongsToMany('App\Field', 'ads_fields');
    }

}
