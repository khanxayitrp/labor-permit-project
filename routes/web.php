<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\http\Controllers\UserController;

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

Route::get('login', 'HomeController@HomeIndex');
/* 
Route::get('/admin',function (){
    //echo 'hello world';
    return view('main.index');
}); */

Auth::routes();


Route::get('/home',['as'=>'home', 'uses' => 'HomeController@index'])->middleware('auth');

//Route::get('/admin', 'HomeController@adminHome');
//Route::Post('/admin', 'HomeController@adminAdd');
Route::resource('admin','UserController')->middleware('is_admin');
