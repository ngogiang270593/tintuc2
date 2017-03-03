<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeNews;
use App\GroupNews;
use Illuminate\Support\Facades\DB;
class TypeNewsController extends Controller
{
    public function getList(){
   		$typenews = DB::table('typenews')->join('groupnews','typenews.idTL','=','groupnews.id')->select('idLT','TenLT','TenLT_KhongDau','ThuTu','typenews.Activie','groupnewsname')->paginate(10);
   		return view('admin.pages.typenews.list',compact('typenews'));
    }
    public function getAdd(){
       $groupnews = GroupNews::select('id','groupnewsname')->get()->toArray();
       return view('admin.pages.typenews.add',compact('groupnews'));
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
        $typenews = new TypeNews();
        $typenews->TenLT = $request->txtTypeNewsName;
        $typenews->TenLT_KhongDau = changeTitle($request->txtTypeNewsName);
        $typenews->ThuTu = $request->txtThuTu;
        $typenews->Activie = $request->rdActivie;
        $typenews->idTL = $request->txtGroupNewsName;
        $typenews->save();
        return redirect()->route('admin.typenews.list');
    }
    public function getDelete($idLT){
        $typenews = TypeNews::where('idLT','=',$idLT);
        $typenews->delete();
        return redirect()->route('admin.typenews.list');
    }
    public function getEdit($idLT){
        $typenews = TypeNews::where('idLT','=',$idLT)->get()->first();
        $groupnews = GroupNews::select('id','groupnewsname')->get()->toArray();
        return view('admin.pages.typenews.edit',compact('typenews','groupnews'));
    }
    public function postEdit($idLT,Request $request){
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
        DB::table('typenews')->where('idLT','=',$idLT)->update(['TenLT'=>$request->txtTypeNewsName,'TenLT_KhongDau' => changeTitle($request->txtTypeNewsName),'ThuTu'=> $request->txtThuTu,'idTL' => $request->txtGroupNewsName,'Activie'=> $request->rdActivie]);
        return redirect()->route('admin.typenews.list');
    }
}
