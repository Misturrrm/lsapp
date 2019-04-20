<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{

    protected $fillable = ['dept_id', 'dept_name'];
    // Table Name
    protected $table = 'department';
    // Primary Key
    public $primaryKey = 'dept_id';
   
   public function catalogues() {
        return $this ->belongsTo('App\Catalogue');
    }

    public function admins() {
        return $this ->belongsTo('App\Admin');
    }

    public function courses(){
        return $this ->hasMany('App\Course');
    }


 
}
