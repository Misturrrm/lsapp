<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    protected $fillable = ['year'];
    // Table Name
    protected $table = 'catalogues';
    // Primary Key
    public $primaryKey = 'year';

    

    //public function user() {
    //    return $this ->belongsTo('App\User');
   // }

    public function admins() {
        return $this ->belongsTo('App\Admin');
    }

    public function department(){
        return $this ->hasMany('App\Department');
    }
}
