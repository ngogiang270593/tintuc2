<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeNews extends Model
{
    protected $table = 'typenews'; 
    public $timestamps = false;
    protected $fillable = [
        'idLT', 'TenLT', 'TenLT_KhongDau','ThuTu','Activie','idTL'
    ];
    public function groupnews(){
    	return $this->belongsTo('App\GroupNews','idTL','id');
    }
     public function news(){
    	return $this->hasMany('App\News','idLT','idLT');
    }
}
