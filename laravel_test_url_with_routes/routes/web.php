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
   //return "ខ្ញុំឈ្មោះ ឧត្តម";
});
// Route::get('/test',function(){
// });
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get("/test/user2",function(){
    return "This is test";
});

Route::get("/test/{name}",function($test){
    return "welcome".$test."";
});
Route::get("/test/hello",function(){
    return "hello from test";
});
Route::get('/DOM007',"BookController@hello");
