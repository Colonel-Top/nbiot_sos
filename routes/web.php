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

Route::prefix('admin')->group(function ()
{
    Route::get('/user', 'User\AdminController@index')->name('user.management');
    Route::post('/user/search', 'User\AdminController@search')->name('user.search');
    Route::post('/device/add', 'Device\AdminController@add')->name('device.add');
    Route::post('/device/update', 'Device\AdminController@update')->name('device.update');
    Route::get('/device/edit/{id}','Device\AdminController@showedit')->name('device.show.edit');

    Route::get('/device/delete/{id}','Device\AdminController@delete')->name('device.delete');
    Route::get('/device/delete/{id}/{image}','Device\AdminController@deleteimg')->name('device.image.delete');
});

Route::prefix('user')->group(function ()
{
    Route::get('/alarm', 'Alarm\UserController@index')->name('alarm.management');
    Route::get('/device', 'Device\UserController@index')->name('device.management');
    Route::get('/device/info/{id}', 'Device\UserController@info')->name('device.show.info');
    Route::post('/device/search', 'Device\UserController@search')->name('user.search');
});
