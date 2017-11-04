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

Route::get('/test','BasicController@test');
Route::get('/all','BasicController@all');
Route::get('/view/{id}','BasicController@find_id');
Route::get('/view2/{id}','BasicController@find_id2');

Route::get('/insert','BasicController@insert');
Route::post('/insert2','BasicController@insert2');
Route::get('/insert2','BasicController@insert2');

Route::get('/delete/{id}','BasicController@delete');

Route::get('/update/{id}','BasicController@update');
Route::post('/update2','BasicController@update2');

//view json data
Route::get('/view2',function(){
  $members = DB::table('member_test')->get();
  return $members;
});

Route::get('/view3',function(){
  $members = DB::table('member_test')->get();
  foreach ($members as $member){
    $id=$member->id;
    $Fname=$member->Fname;
    $Lname=$member->Lname;
    $sex=$member->sex;

    echo "#$id ,$Fname,$Lname,$sex <br/>";
  }
});
