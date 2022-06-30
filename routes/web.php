<?php

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

Route::get('/', function () {
    return view('frontend/index');
});

//Route::view('/oyzer','frontend/index');
//Route::view('/oyzer/registration','frontend/register');
Route::get('/registration','App\Http\Controllers\frontend\Frontend@form_ele');
Route::view('/services','frontend/services');
Route::view('/login','frontend/login');

Route::view('/admin','admin/login');
Route::post('/admin/login_submit','App\Http\Controllers\Vendor_auth@login_submit');
Route::post('/admin/register/submit','App\Http\Controllers\admin\Register@submit');
 
 Route::get('/admin/logout', function () {
    session()->forget('OYZER_VENDOR_ID');
    return redirect('/admin');
    
});

Route::view('/superadmin','super/login');
Route::post('/superadmin/login_submit','App\Http\Controllers\Super_auth@login_submit');


Route::get('/superadmin/logout', function () {
    session()->forget('OYZER_SUPER_ID');
    return redirect('/superadmin');
    
});

//Route::view('/oyzer/admin/list','admin/manage/list');
 Route::group(['middleware'=>['App\Http\Middleware\VendorAuth']],function(){
  
  Route::get('/admin/list/{id}','App\Http\Controllers\admin\Register@listing');   
  
  Route::get('/admin/edit/{id}','App\Http\Controllers\admin\Register@edit');
  Route::post('/admin/update/{id}','App\Http\Controllers\admin\Register@update');

});

 Route::group(['middleware'=>['App\Http\Middleware\SuperAuth']],function(){
  
  Route::get('/superadmin/list','App\Http\Controllers\super\SuperAdmin@listing');   
  
  Route::get('/superadmin/edit_inactive/{id}','App\Http\Controllers\super\SuperAdmin@edit_inactive');
   Route::get('/superadmin/edit_active/{id}','App\Http\Controllers\super\SuperAdmin@edit_active');
  //Route::post('/superadmin/update/{id}','App\Http\Controllers\admin\Register@update');

});