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
    return view('auth.login');
});

Auth::routes();

Route::post('/login','Auth\LoginController@check')->name('login');

Route::get('/selectaccount', 'Auth\LoginController@account')->name("selectaccount");

//User Dashboard
Route::get('/dashboard','DashboardController@index')->name('dashboard');

//bills and paymenthistory
Route::get('/bills', 'DashboardController@bills')->name("bills");
Route::get('/payhistory', 'DashboardController@payhistory')->name("payhistory");


// Route::get('/account', 'HomeController@index')->name('selectAccount');

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/account', 'HomeController@index')->name('selectAccount');

// Route::get('/post','PostController@post');
// Route::get('/login','LoginController@check')->name('login');
// Route::get('/profile','ProfileController@profile');
// Route::get('/category','CategoryController@category');
// Route::post('/addCategory','CategoryController@addCategory');
// Route::post('/addProfile','ProfileController@addProfile');
// Route::post('/addPost','PostController@addPost');
// Route::get('/view/{id}','PostController@view');
// Route::get('/edit/{id}','PostController@edit');
// Route::post('/editPost/{id}','PostController@editPost');
// Route::get('/delete/{id}','PostController@delete');
