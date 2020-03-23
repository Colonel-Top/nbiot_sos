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

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/api','HomeController@index')->name('def')->with(Session::flash('error','Method not allow'));
Route::post('/api','APIController@data_incoming')->name('api.getdata');

Route::prefix('admin')->group(function ()
{
    Route::get('/user', 'User\AdminController@index')->name('user.management');

    Route::post('/user/search', 'User\AdminController@search')->name('user.search');
    Route::get('/user/edit/{id}', 'User\AdminController@showedit')->name('user.show.edit');
    Route::post('/user/update', 'User\AdminController@update')->name('user.update');
    Route::get('/user/delete/{id}','User\AdminController@delete')->name('user.delete');

    Route::post('/device/add', 'Device\AdminController@add')->name('device.add');
    Route::post('/device/update', 'Device\AdminController@update')->name('device.update');
    Route::get('/device/edit/{id}','Device\AdminController@showedit')->name('device.show.edit');
    Route::get('/device/delete/{id}','Device\AdminController@delete')->name('device.delete');
    Route::get('/device/delete/{id}/{image}','Device\AdminController@deleteimg')->name('device.image.delete');
});

Route::prefix('user')->group(function ()
{


    Route::get('/profile/edit', 'User\UserController@showedit')->name('profile.show.edit');
    Route::post('/profile/update', 'User\UserController@update')->name('profile.update');


    Route::get('/alarm', 'Alarm\UserController@index')->name('alarm.management');
    Route::post('/alarm/search', 'Alarm\UserController@search')->name('alarm.search');
    Route::get('/device', 'Device\UserController@index')->name('device.management');
    Route::get('/device/info/{id}', 'Device\UserController@info')->name('device.show.info');
    Route::post('/device/search', 'Device\UserController@search')->name('user.search');
});
