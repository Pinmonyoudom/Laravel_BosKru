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
Route::group(['prefix'=>'frontend'],function($router){
	$router->get('/','FrontendController@index');
	$router->get('/shop',function(){
		return view('frontend.shop');
	});
});

Route::group(['prefix'=>'backend'],function($router){
	$router->get('/','BackendController@index');
});
// Route::get("/test",function(){
// 	return "This is test";
// });

// Route::get("/test/hello",function(){
// 	return "hello from test";
// });
// Route::get("/test/{name}",function($test){
// 	return "welcome ".$test."";
// });

// Route::group(['prefix'=>'book','middleware'=>'web'],function($router){
// 	$router->get('/create',"BookController@create");
// 	$router->get('/edite',"BookController@edit");
// 	$router->get('/view',"BookController@view");
// 	$router->get('/',"BookController@index");
// });

Route::resource('photo','PhotoController');












// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
