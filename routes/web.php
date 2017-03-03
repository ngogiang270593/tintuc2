<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

	/*$theloai_id = Input::get('theloai_id');
	$loaitin = TypeNews::where('idTL','=',$theloai_id)->get();
	return Reponse::json($loaitin);*/

Route::get('/','HomeController@index');
Route::get('chi-tiet-tin/{id}',['as'=>'chitiettin','uses'=>'HomeController@chitiettin']);
Route::get('loai-tin/{id}/{tenloai}',['as'=>'loaitin','uses'=>'HomeController@loaitin']);
Route::get('m_admin','HomeController@admin');
Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'user'],function(){
		Route::get('list',['as'=>'admin.user.list','uses'=>'UserController@getList']);
		Route::get('add',['as'=>'admin.user.add','uses'=>'UserController@getAdd']);
		Route::post('add',['as'=>'admin.user.add','uses'=>'UserController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.user.getDelete','uses'=>'UserController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.user.getEdit','uses'=>'UserController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.user.postEdit','uses'=>'UserController@postEdit']);
	});
});
Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'menu'],function(){
		Route::get('list',['as'=>'admin.menu.list','uses'=>'MenuController@getList']);
		Route::get('add',['as'=>'admin.menu.add','uses'=>'MenuController@getAdd']);
		Route::post('add',['as'=>'admin.menu.add','uses'=>'MenuController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.menu.getDelete','uses'=>'MenuController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.menu.getEdit','uses'=>'MenuController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.menu.postEdit','uses'=>'MenuController@postEdit']);
	});
});
Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'typenews'],function(){
		Route::get('list',['as'=>'admin.typenews.list','uses'=>'TypeNewsController@getList']);
		Route::get('add',['as'=>'admin.typenews.add','uses'=>'TypeNewsController@getAdd']);
		Route::post('add',['as'=>'admin.typenews.add','uses'=>'TypeNewsController@postAdd']);
		Route::get('delete/{idLT}',['as'=>'admin.typenews.getDelete','uses'=>'TypeNewsController@getDelete']);
		Route::get('edit/{idLT}',['as'=>'admin.typenews.getEdit','uses'=>'TypeNewsController@getEdit']);
		Route::post('edit/{idLT}',['as'=>'admin.typenews.postEdit','uses'=>'TypeNewsController@postEdit']);
	});
});
Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'groupnews'],function(){
		Route::get('list',['as'=>'admin.groupnews.list','uses'=>'GroupNewsController@getList']);
		Route::get('add',['as'=>'admin.groupnews.add','uses'=>'GroupNewsController@getAdd']);
		Route::post('add',['as'=>'admin.groupnews.add','uses'=>'GroupNewsController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.groupnews.getDelete','uses'=>'GroupNewsController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.groupnews.getEdit','uses'=>'GroupNewsController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.groupnews.postEdit','uses'=>'GroupNewsController@postEdit']);
	});
});
Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'news'],function(){
		Route::group(['prefix'=>'ajax'],function(){
			Route::get('loaitin/{theloai_id}','AjaxController@getLoaiTin');
			});
		Route::get('list',['as'=>'admin.news.list','uses'=>'NewsController@getList']);
		Route::get('add',['as'=>'admin.news.add','uses'=>'NewsController@getAdd']);
		Route::post('add',['as'=>'admin.news.add','uses'=>'NewsController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.news.getDelete','uses'=>'NewsController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.news.getEdit','uses'=>'NewsController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.news.postEdit','uses'=>'NewsController@postEdit']);
	});
});
Route::get('login','HomeController@login');
Route::get('logout','HomeController@logout');
Auth::routes();

