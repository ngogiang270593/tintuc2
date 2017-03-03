<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupNews extends Model
{
    protected $table = 'groupnews'; 
    public $timestamps = false;
    protected $fillable = [
        'groupnewsname', 'level','activie','index'
    ];
    public function news(){
    	return $this->hasMany('App\News','groupnewsid','id');
    }
    public function typenews(){
        return $this->hasMany('App\TypeNews','idTL','id');
    }
    public function advertise(){
    	return $this->hasMany('App\Advertise','groupnewsid','id');
    }
   
}
