<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news'; 
    public $timestamps = false;
    protected $fillable = [
        'title', 'image', 'description','content','activie','views','upnews','groupnewsid','idLT'
    ];
    public function groupnews(){
    	return $this->belongsTo('App\GroupNews','groupnewsid','id');
    }
    public function typenews(){
    	return $this->belongsTo('App\TypeNews','idLT','idLT');
    }
   
}
