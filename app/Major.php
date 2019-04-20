<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
     // Table Name
    protected $table = 'major';
    // Primary Key
    public $primaryKey = 'major_id';
   
   public function department() {
        return $this ->belongsTo('App\User');
    }

    public function course(){
        return $this ->hasMany('App\Course');
    }
}
