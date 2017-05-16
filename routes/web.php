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

Route::group(['namespace'=>'Pc','domain'=>config('site.pc_domain')], function () {
        Route::get('/', function () {
            return redirect()->route('pc.index');
        });
        Route::get('index', 'IndexController@index')->name('pc.index');

    //需要登录才可以使用的
        Route::get('abc', 'IndexController@index')->name('pc.abc');


});

