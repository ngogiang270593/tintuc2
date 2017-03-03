<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
class MenuController extends Controller
{
    public function getList(){
    	$menu = Menu::select('id','menuname','link','ord','activie')->get()->toArray();
    	return view('admin.pages.menu.list',compact('menu'));
    }
    public function getAdd(){
        return view('admin.pages.menu.add');
    }
    public function postAdd(Request $request){
        $menu = new Menu();
        $menu->menuname = $request->txtName;
        $menu->link = $request->txtLink;
        $menu->ord = $request->txtOrd;
        $menu->activie = $request->rdActivie;
        $menu->save();
        return redirect()->route('admin.menu.list');
    }
    public function getDelete($id){
        echo $menu = Menu::find($id);
        $menu->delete();
        return redirect()->route('admin.menu.list');
    }
    public function getEdit($id){
        $menu = Menu::find($id)->toArray();
        return view('admin.pages.menu.edit',compact('menu'));
    }
    public function postEdit($id,Request $request){
        $menu =  Menu::find($id);
        $menu->menuname = $request->txtName;
        $menu->link = $request->txtLink;
        $menu->ord = $request->txtOrd;
        $menu->activie = $request->rdActivie;
        $menu->save();
        return redirect()->route('admin.menu.list');
    }
}
