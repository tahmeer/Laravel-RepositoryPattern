<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
    
// });
Route::get('/view','AuthController@loginview')->name('LogInView');
// Route::get('/view',function(){
//     if(session()->has('user')){
//         return redirect('/students');
//     }
//     return redirect('/view'); 
// });
Route::get('/logout',function(){
    if(session()->has('user')){
        session()->pull('user');
    }
    return redirect('/view');
});
Route::post('/loginuser','AuthController@login')->name('LogIn');
Route::get('/students','StudentController@index')->name('firstpage');
Route::get('/createnew','StudentController@create')->name('secondpage');
Route::post('/store','StudentController@store')->name('storesecondpage');
Route::get('/editpage/{id}','StudentController@edit')->name('editsecondpage');
Route::post('/updatepage','StudentController@update')->name('updatesecondpage');
Route::get('/deletepage/{id}','StudentController@delete')->name('deletesecondpage');
Route::get('/useoflimit','StudentController@UseLimit')->name('UseLimit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
