<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin';

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

   public function posts(){
        return $this->hasMany('App\Post');
    }

    public function catalogues() {
        return $this ->hasMany('App\Catalogue');
    }

    public function department() {
        return $this ->hasMany('App/Department');
    }

    
    
    // public function course() {
    //     return $this ->hasMany('App\Course');
    // }
    
    // public function grade() {
    //     return $this ->hasMany('App\Grade');
    // }
    
    // public function major() {
    //     return $this ->hasMany('App\Major');
    // }

    //public function posts(){
      //  return $this->hasMany('App\Post');
   // }
}
