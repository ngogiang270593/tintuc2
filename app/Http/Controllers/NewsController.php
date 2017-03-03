<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\GroupNews;
use App\User;
use App\TypeNews;
use Illuminate\Support\Facades\DB;
use Auth;
use Input;
class NewsController extends Controller
{
    
    public function getList(){
    	$data = DB::table('news')->join('groupnews','news.groupnewsid','=','groupnews.id')->join('typenews','news.idLT','=','typenews.idLT')->select('news.id','titelname','image','description','content','views','groupnewsname','TenLT','upnews','news.activie')->paginate(1);
    	return view('admin.pages.news.list',compact('data'));
    }
    public function getAdd(){
        $groupnews = GroupNews::select('id','groupnewsname')->get()->toArray();
        $typenews = TypeNews::all()->toArray();
        $user_id = Auth::user()->id;
        $username = User::select('name')->where('id','=',$user_id)->get()->toArray();
        return view('admin.pages.news.add',compact('groupnews','username','typenews'));
    }
    public function postAdd(Request $request){
        $file_name = $request->file('image')->getClientOriginalName();
        /*$duoi_file = $file_name->getClientOriginalExtension();
        if($duoi_file =! 'jpg' && $duoi_file != 'png' && $duoi_file != 'jpeg')
        {
            return redirect()->route('admin.news.add')->with('loi','Ban chi dc chon file jpg,png,jpeg')
        }*/
        $news = new News();
        $news->titelname = $request->txtTitleName;
        $news->description = $request->txtDes;
        $news->content = $request->txtContent;
        $news->upnews = $request->txtUpNews;
        $news->views = 0;
        $news->activie = $request->rdActivie;
        $news->groupnewsid = $request->txtGroupNewsName;
        $news->idLT = $request->txtTenLT;
        $news->image = $file_name;
        $request->file('image')->move('upload/news/',$file_name);
        $news->save();
        return redirect()->route('admin.news.list');
    }
    public function getDelete($id){
        $news = News::find($id);
        $news->delete();
        return redirect()->route('admin.news.list');
    }
    public function getEdit($id){
        $news = News::find($id);
        $groupnews = GroupNews::all();
        $typenews = TypeNews::all();
        $user_id = Auth::user()->id;
        $username = User::select('name')->where('id','=',$user_id)->get()->toArray();
        return view('admin.pages.news.edit',compact('news','groupnews','username','typenews'));
    }
    public function postEdit($id,Request $request){        
        $news = News::find($id);
        $file_name = $request->file('image')->getClientOriginalName();
        $news->titelname = $request->txtTitleName;
        $news->description = $request->txtDes;
        $news->content = $request->txtContent;
        $news->upnews = $request->txtUpNews;
        $news->views = 0;
        $news->activie = $request->rdActivie;
        $news->groupnewsid = $request->txtGroupNewsName;
        $news->idLT = $request->txtTenLT;
        $news->image = $file_name;
        $request->file('image')->move('upload/news/',$file_name);
        $news->save();
        return redirect()->route('admin.news.list');
    }
    	
}
