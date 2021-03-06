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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',function(){
	return view('index');
});

Route::get('/regist',function(){
	return view('regist');
});

Route::get('/search','KegiatanController@search');



//Start myprofile
Route::get('/myprofile/edit',function(){
    return view('profile.index');
});
Route::get('/myprofile/history', 'UserController@tripHistory');
Route::post('/myprofile/edit', 'UserController@update');
Route::post('/myprofile/edit/pass', 'UserController@updatePass');
//end




Route::get('/post/public',function(){
	return view('post.postpublic');
});

// Route::get('/post/user',function(){
// 	return view('post.postuser');
// });
//
//THIS ONE DELETED, but u shld see postaplicant-user.blade.php


Route::get('/post/discuss',function(){
	return view('post.postdiscuss');
});

Route::get('/post/applicant',function(){
	return view('post.postapplicant');
});

Route::get('/post/owner',function(){
	return view('post.postowner');
});

Route::get('/post/create',function(){
	return view('post.postcreate');
});

Route::get('/post/edit',function(){
	return view('post.postedit');
});

Route::get('/location',function(){
	return view('lokasi.location');
});

Route::get('/post/{id}',['uses'=>'KegiatanController@showpost']);

Route::get('/post/edit/{id}',['uses' => 'KegiatanController@editpost']);

Route::get('/post/discuss/{id}',['uses'=>'KomentarKegiatanController@showdiscuss']);

Route::get('/post/user/{id}',['uses'=>'PesertaKegiatanController@showpeserta']);

Route::post('/regist/insert','UserController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/{user}', 'UserController@show');