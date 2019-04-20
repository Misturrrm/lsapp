<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    // Table Name
    protected $table = 'grade';
    // Primary Key
    public $primaryKey = 'id';

     public function  course() {
        return $this ->belongsTo('App\Course');

    }

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
  

    


}
