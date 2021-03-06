<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    public function ad() {
        return $this->hasOne('App\Ad');
    }
}
