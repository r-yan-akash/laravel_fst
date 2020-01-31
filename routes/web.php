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
//Route::get('test','HomeController@index'); //single-user-test

Route::resource('/student','StudentController');
Route::resource('/myinfo','Admin\MyinfoController');
Route::resource('/teacher','Admin\TeacherController');

//laravel-user-auth-pakge
Auth::routes();

Route::get('/home', 'Admin\MyinfoController@index')->name('home');
//multi-auth-admin-route
//Route::group(['prefix' => 'admin'], function () {
//  Route::get('/login', 'Admin\Auth\LoginController@showLoginForm')->name('login');
//  Route::post('/login', 'Admin\Auth\LoginController@login');
//  Route::post('/logout', 'Admin\Auth\LoginController@logout')->name('logout');
//
//  Route::get('/register', 'Admin\Auth\RegisterController@showRegistrationForm')->name('register');
//  Route::post('/register', 'Admin\Auth\RegisterController@register');
//
//  Route::post('/password/email', 'Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
//  Route::post('/password/reset', 'Admin\Auth\ResetPasswordController@reset')->name('password.email');
//  Route::get('/password/reset', 'Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
//  Route::get('/password/reset/{token}', 'Admin\Auth\ResetPasswordController@showResetForm');
//});
//multi-auth-employee-route
//Route::group(['prefix' => 'employee'], function () {
//  Route::get('/login', 'Employee\Auth\LoginController@showLoginForm')->name('login');
//  Route::post('/login', 'Employee\Auth\LoginController@login');
//  Route::post('/logout', 'Employee\Auth\LoginController@logout')->name('logout');
//
//  Route::get('/register', 'Employee\Auth\RegisterController@showRegistrationForm')->name('register');
//  Route::post('/register', 'Employee\Auth\RegisterController@register');
//
//  Route::post('/password/email', 'Employee\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
//  Route::post('/password/reset', 'Employee\Auth\ResetPasswordController@reset')->name('password.email');
//  Route::get('/password/reset', 'Employee\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
//  Route::get('/password/reset/{token}', 'Employee\Auth\ResetPasswordController@showResetForm');
//});
