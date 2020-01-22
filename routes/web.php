<?php
Route::get('/',function(){
   return view('welcome');
});
Route::get('home',function(){
    return view('home');
});
Route::get('/contact',function(){
    return view('contact');
})->middleware('age');

Route::get('about/','testController@index')->name('about');
//-----Ariful-islam-vi-------
Route::resource('/student','StudentController');
Route::resource('/myinfo','Admin\MyinfoController');

