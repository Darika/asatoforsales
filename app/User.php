<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsToMany('App\Role', 'user_role');
    }

    public function ad(){
        return $this->hasOne('App\Ad');
    }

    public function action()
    {
        return $this->belongsToMany('App\Action', 'action_user');
    }

    public function package()
    {
        return $this->belongsToMany('App\Package', 'user_package');
    }

    public function dialog()
    {
        return $this->hasMany('App\Dialog');
    }

    public function page()
    {
        return $this->hasMany('App\Page');
    }

    public function post()
    {
        return $this->hasMany('App\Post');
    }
}
