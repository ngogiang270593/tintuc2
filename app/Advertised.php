<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertised extends Model
{
    protected $table = 'advertised'; 
    public $timestamps = false;
    protected $fillable = [
        'advertisedname', 'address', 'phone'
    ];
    public function advertise(){
    	return $this->hasMany('App\Advertise','advertisedid','id');
    }
    
}
