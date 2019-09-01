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

// Route::get('/', function () {
//     return view('welcome');
// });

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
            Route::resource('category', 'CategoryController');
            Route::resource('product', 'CategoryController');
});

 //User
Route::get('/account','Auth\LoginController@account')->name('account');
Route::get('/','IndexController@index')->name('index');

Route::group(['prefix' => 'user',
            'namespace' => 'FrontEnd',
            'as' => 'user.'
             ],
        function () {
            Route::get('product/{id}','ProductController@details')->name('product.details');
            Route::post('addtocart/{id}','ProductController@addcart')->name('add.cart');
            Route::get('cart','ProductController@cart')->name('cart');
            Route::put('cart/{id}/update', 'ProductController@updatecart')->name('update.cart');
            Route::get('cart/{id}/delete','ProductController@deletecart')->name('delete.cart');
     // Route::get('/product','ProductController')->name('product');
});

// All Route after login
Route::group(['prefix' => 'user',
            'namespace' => 'FrontEnd',
            'as' => 'user.',
            'middleware' => 'auth',
             ],
        function () {
            Route::get('checkout','ProductController@checkout')->name('checkout');
            Route::post('placeorder','ProductController@placeorder')->name('placeorder');
            Route::get('/thanks','ProductController@thanks')->name('thanks');
});



//Login and logout with user

