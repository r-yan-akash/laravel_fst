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
//for admin theme
Route::get('/admin-it',function(){
    return view('Backend.index');
});
Route::get('/content',function(){
    return view('Backend.pages.contact.create');
});
//end

Route::get('about/','testController@index')->name('about');
//-----Ariful-islam-vi-------
//Route::get('test','HomeController@index'); //single-user-test

Route::resource('/student','StudentController');
Route::resource('/myinfo','Admin\MyinfoController');
Route::resource('/teacher','Admin\TeacherController');

//laravel-user-auth-pakge
//Auth::routes();

Route::get('/home', 'Admin\MyinfoController@index')->name('home');
//multi-auth-admin-route
Route::group(['prefix' => 'admin'], function () {
    Route::namespace('Admin\Auth')->group(function () {
      Route::get('/login', 'LoginController@showLoginForm')->name('login');
      Route::post('/login', 'LoginController@login');
      Route::post('/logout', 'LoginController@logout')->name('logout');
      Route::get('/register', 'RegisterController@showRegistrationForm')->name('register');
      Route::post('/register', 'RegisterController@register');
      Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.request');
      Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.email');
      Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.reset');
      Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm');
    });
});
//multi-auth-employee-route
Route::group(['prefix' => 'employee'], function () {
  Route::get('/login', 'Employee\Auth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'Employee\Auth\LoginController@login');
  Route::post('/logout', 'Employee\Auth\LoginController@logout')->name('logout');
  Route::get('/register', 'Employee\Auth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'Employee\Auth\RegisterController@register');
  Route::post('/password/email', 'Employee\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'Employee\Auth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'Employee\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'Employee\Auth\ResetPasswordController@showResetForm');
});


