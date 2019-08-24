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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Admin
Route::group(['prefix' => 'admin',
             'namespace' => 'BackEnd',
             'as'   => 'admin.',
             'middleware' => 'auth'
             ],
             function () {
            Route::get('/dashboard','HomeController@dashboard')->name('dashboard');

            Route::resource('user', 'UserController');
            Route::resource('role', 'RoleController');
            Route::resource('permission', 'PermissionController');

            //Route::get('admin-login','Auth\LoginController@showLoginForm')->name('admin.login');
});

 //User
Route::get('/account','Auth\LoginController@account')->name('account');
Route::get('/index','IndexController@index')->name('index');
Route::group(['prefix' => 'user',
            'namespace' => 'FrontEnd',
            'as' => 'user.'
             ],
        function () {


});

//Login and logout with user

