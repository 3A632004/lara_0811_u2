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
    //return ('welcome');
    return view('welcome');
    //return redirect('welcome');
});

//Route::get('hello/{name}',function($name){
    //return'Hello,'.$name;
//});

Route::get('say/{name?}',['as'=>'hello.index',function($name='Everybody'){
    return'Hello,'.$name;
}]);

Route::group(['prefix'=>'admin'],function(){
    Route::get('dashboard',function(){
        return'admindashboard';
    });
});
