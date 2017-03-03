<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\GroupNews;
class GroupNewsController extends Controller
{
    public function getList(){
    	$groupnews = GroupNews::select('id','groupnewsname','groupnewsname_KD','level','activie','index')->paginate(8);
    	return view('admin.pages.groupnews.list',compact('groupnews'));
    }
    public function getAdd(){
    	return view('admin.pages.groupnews.add');
    }

    public function postAdd(Request $request){
    	function stripUnicode($str){
			if(!$str) return false;
			$unicode = array(
			'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
			'd'=>'đ',
			'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
			'i'=>'í|ì|ỉ|ĩ|ị',
			'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
			'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
			'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
			);
			foreach($unicode as $nonUnicode=>$uni) $str = preg_replace("/($uni)/i",$nonUnicode,$str);
			return $str;
		}
		function changeTitle($str){ 
		    $str = stripUnicode($str); 
		    $str = mb_convert_case($str,MB_CASE_TITLE,'utf-8'); 
		    // MB_CASE_UPPER / MB_CASE_TITLE / MB_CASE_LOWER 
		    //$str=trim(str); 
		    $str=str_replace("‘","",$str); 
		    $str=str_replace('"','',$str); 
		    $str = str_replace(' ','-',$str); 
		    return $str; 
		    }
    	$groupnews = new GroupNews();
    	$groupnews->groupnewsname = $request->txtName;
        $groupnews->groupnewsname_KD = changeTitle($request->txtName);
    	$groupnews->level = $request->txtLevel;
    	$groupnews->activie = $request->rdActivie;
    	$groupnews->index = $request->rdIndex;
    	$groupnews->save();
    	return redirect()->route('admin.groupnews.list');

    }
    public function getDelete($id){
    	$groupnews = GroupNews::find($id);
    	$groupnews->delete();
    	return redirect()->route('admin.groupnews.list');
    }
    public function getEdit($id){
    	$groupnews = GroupNews::find($id)->toArray();
    	return view('admin.pages.groupnews.edit',compact('groupnews'));
    }
    public function postEdit($id,Request $request){
    	function stripUnicode($str){
			if(!$str) return false;
			$unicode = array(
			'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
			'd'=>'đ',
			'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
			'i'=>'í|ì|ỉ|ĩ|ị',
			'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
			'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
			'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
			);
			foreach($unicode as $nonUnicode=>$uni) $str = preg_replace("/($uni)/i",$nonUnicode,$str);
			return $str;
		}
		function changeTitle($str){ 
		    $str = stripUnicode($str); 
		    $str = mb_convert_case($str,MB_CASE_TITLE,'utf-8'); 
		    // MB_CASE_UPPER / MB_CASE_TITLE / MB_CASE_LOWER 
		    //$str=trim(str); 
		    $str=str_replace("‘","",$str); 
		    $str=str_replace('"','',$str); 
		    $str = str_replace(' ','-',$str); 
		    return $str; 
		    }
    	$groupnews = GroupNews::find($id);
    	$groupnews->groupnewsname = $request->txtName;
        $groupnews->groupnewsname_KD =  changeTitle($request->txtName);
    	$groupnews->level = $request->txtLevel;
    	$groupnews->activie = $request->rdActivie;
        $groupnews->index = $request->rdIndex;
    	$groupnews->save();
    	return redirect()->route('admin.groupnews.list');
    }
}
