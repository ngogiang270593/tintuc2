<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertise extends Model
{
    protected $table = 'advertise'; 
    public $timestamps = false;
    protected $fillable = [
        'advertisename', 'image', 'width','height','link','target','position','click','	ord','active','money','groupnewsid','advertisedid'
    ];
    public function groupnews(){
    	return $this->belongsTo('App\GroupNews','groupnewsid','id');
    }
    public function advertised(){
    	return $this->belongsTo('App\Advertised','advertisedid','id');
    }
}
