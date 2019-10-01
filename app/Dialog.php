<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dialog extends Model
{
    protected $fillable = [
        'text', 'attach', 'read',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }


}
