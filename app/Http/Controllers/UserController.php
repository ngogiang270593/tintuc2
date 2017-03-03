<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;
use Hash;
use Auth;
use Input,File;
class UserController extends Controller
{
    public function getList(){
        $user = User::select('id','name','email','image','role')->get()->toArray();
    	return view('admin.pages.user.list',compact('user'));
    }
    public function getAdd(){
    	return view('admin.pages.user.add');
    }
    public function postAdd( UserRequest  $user_request){
    	
        $user = new User();  
        $file_name = $user_request->file('fImage')->getClientOriginalName();
       /* $duoi_file = $user_request->file('fImage')->getClientOriginalExtension();
         echo $duoi_file;die;
        if($duoi_file != 'jpg' && $duoi_file != 'png' && $duoi_file != 'jpeg')
        {
            return redirect()->route('admin.user.add')->with('loi','Ban chi dc chon file jpg,png,jpeg');
        }*/
        $user->name  =  $user_request->txtUserName;
    	$user->email    =	$user_request->txtEmail;
    	$user->password = Hash::make($user_request->txtPass);
    	$user->remember_token = $user_request->_token;
    	$user->role = $user_request->txtRole;
        $user->image = $file_name;
        $user_request->file('fImage')->move('upload/',$file_name);
    	$user->save();
    	return redirect()->route('admin.user.list');
    }
    function getDelete($id){
        /*$user = Auth::user()->id;*/
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.user.list');
       
    }
    function getEdit($id){
         $user = User::find($id)->toArray();
         return view('admin.pages.user.edit',compact('user'));;
    }
    function postEdit($id,Request $user_request){
        $user = User::find($id);
        $file_name = $user_request->file('fImage')->getClientOriginalName();
        $user->name  =  $user_request->txtUserName;
        $user->email    =   $user_request->txtEmail;
        $user->password = Hash::make($user_request->txtPass);
        $user->remember_token = $user_request->_token;
        $user->role = $user_request->txtRole;
        $user->image = $file_name;
        $user_request->file('fImage')->move('upload/',$file_name);
        $user->save();
        return redirect()->route('admin.user.list');
    }
}
