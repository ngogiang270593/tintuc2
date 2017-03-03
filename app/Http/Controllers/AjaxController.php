<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeNews;
class AjaxController extends Controller
{
    public function getLoaiTin($theloai_id){
    	$loaitin = TypeNews::where('idTL','=',$theloai_id)->get();
    	foreach ($loaitin as $lt) {
    		 echo "<option value='".$lt->idLT."'>".$lt->TenLT."</option>";
    	}
    }
}
