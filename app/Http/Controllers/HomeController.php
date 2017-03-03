<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use View;
use Session;
use DB;
use App\TypeNews;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       /* $this->middleware('auth');*/
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    $namtinmoi =  DB::table('news')->orderBy('id','desc')->skip(0)->take(5)->get();
    	 $max_id = DB::table('news')->max('id');
    	 $tinmoi = DB::table('news')->where('id','<>',$max_id)->orderBy('id','desc')->skip(0)->take(5)->get();

    	 $tinhot = DB::table('news')->orderBy('views','desc')->skip(0)->take(5)->get();
    	 
    	 $max_tt = DB::table('news')->where('groupnewsid','=',3)->max('id');
    	 $thethaomoinhat = DB::table('news')->where('id','=',$max_tt)->get()->first();
    	 $thethaomoitt = DB::table('news')->where('groupnewsid','=',3)->orderBy('id','desc')->skip(1)->take(3)->get();
    	 
    	 $max_gt = DB::table('news')->where('groupnewsid','=',8)->max('id');
    	 $giaitrimoinhat = DB::table('news')->where('id','=',$max_gt)->get()->first();
    	 $giaitrimoitt = DB::table('news')->where('groupnewsid','=',8)->orderBy('id','desc')->skip(1)->take(2)->get();
         return view('user.pages.home',compact('namtinmoi','tinmoi','tinhot','thethaomoinhat','giaitrimoinhat','thethaomoitt','giaitrimoitt'));          
    }

    public function login(Request $request){
        
        if(Auth::check()){
            return view('admin.pages.home'); 
        }else
        {
            return view('auth.login');
        }
    }
    public function logout(){
        Auth::logout();
        /*Session::flush();*/
        return view('auth.login');
    }
    public function admin(Request $request)
    {   
       
        return view('admin.pages.home');
      
    }
    public function loaitin($id){
    	$tinmoinhat = DB::table('news')->orderBy('id','desc')->skip(0)->take(5)->get();
        $name_lt = TypeNews::select('TenLT')->where('idLT','=',$id)->first();
        $news = DB::table('news')->where('idLT','=',$id)->paginate(2);
        return view('user.pages.typenews',compact('name_lt','news','tinmoinhat'));
    }
    public function chitiettin($id){
        $tinmoinhat = DB::table('news')->orderBy('id','desc')->skip(0)->take(4)->get();
        $news = $news = DB::table('news')->join('groupnews','news.groupnewsid','=','groupnews.id')->join('typenews','news.idLT','=','typenews.idLT')->select('news.id','content','groupnewsname','TenLT','news.idLT','TenLT_KhongDau')->where('news.id','=',$id)->get()->first();
        $tinlienquan = DB::table('news')->where([['idLT','=',$news->idLT],['id','<>',$news->id]])->paginate(1);
        return view('user.pages.single',compact('news','tinmoinhat','tinlienquan'));
    }
}
