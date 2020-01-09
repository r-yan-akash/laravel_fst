<?php
Route::get('/',function(){
   return view('welcome');
});


Route::resource('/student','StudentController');
Route::resource('/myinfo','Admin\MyinfoController');

