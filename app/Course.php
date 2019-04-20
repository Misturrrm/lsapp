<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    // Table Name
    protected $table = 'course';
    // Primary Key
    public $primaryKey = 'course_id';

     public function department() {
        return $this ->belongsTo('App\Department');
    }
    
    public function catalogues() {
        return $this->belongsTo('App\Catalogue');
    }


    public function users() {
        return $this ->belongsTo('App\User');
    }

    public function admins() {
        return $this ->belongsTo('App\Admin');
    }
  

    public function grade(){
        return $this ->hasMany('App\Grade');
    }









}

