<?php

use Illuminate\Support\Facades\Route;

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

    Route::group(['prefix' => 'dashboard', 'middleware' => 'auth', 'namespace' => 'Admin'], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');

    Route::group(['prefix' => 'users'], function () {
        Route::get('/', 'UserController@index')->name('user.index');
        Route::get('/create','UserController@create')->name('user.create');
        Route::post('/','UserController@store')->name('user.store');
        
    Route::group(['prefix' => '{user}'], function () {
        Route::get('/show','UserController@show')->name('user.show');
        Route::get('/edit','UserController@edit')->name('user.edit');
        Route::patch('/update','Usercontroller@update')->name('user.update');
        Route::get('/delete','UserController@delete')->name('user.delete');
        Route::delete('destroy','UserController@destroy')->name('user.destroy');
        });
    });

    Route::group(['prefix' => 'villages',], function () {
        Route::get('/', 'VillageController@index')->name('village.index');
       
    
        Route::group(['prefix' => '{village}'], function () {
        Route::get('/dindex','VillageController@dindex')->name('do.village.index');
        Route::get('/edit','VillageController@edit')->name('village.edit');
        Route::patch('/update','Villagecontroller@update')->name('village.update');
        
        });
    });

    Route::group(['prefix' => 'people'], function () {
        Route::get('/', 'PeopleController@index')->name('people.index');
        Route::get('/create','PeopleController@create')->name('people.create');
        Route::post('/','PeopleController@store')->name('people.store');
        
        Route::group(['prefix' => '{people}'], function () {
        Route::get('/show','PeopleController@show')->name('people.show');
        Route::get('/edit','PeopleController@edit')->name('people.edit');
        Route::patch('/update','PeopleController@update')->name('people.update');
        Route::get('/delete','PeopleController@delete')->name('people.delete');
        Route::delete('destroy','PeopleController@destroy')->name('people.destroy');
        });
    });

    Route::group(['prefix' => 'payments'], function () {
        Route::get('/', 'PaymentController@index')->name('payment.index');
        Route::get('/create','PaymentController@create')->name('payment.create');
        Route::get('ajaxRequest','PaymentController@dropdown')->name('get.person');
        Route::post('/store','PaymentController@store')->name('payment.store');
        
    Route::group(['prefix' => '{payment}'], function () {
        Route::get('/show','PaymentController@show')->name('payment.show');
        Route::get('/edit','PaymentController@edit')->name('payment.edit');
        Route::patch('/update','Paymentcontroller@update')->name('payment.update');
        Route::get('/delete','PaymentController@delete')->name('payment.delete');
        Route::delete('destroy','PaymentController@destroy')->name('payment.destroy');
        });
    });

    Route::group(['prefix' => 'depends'], function () {
        Route::get('/', 'DependController@index')->name('depend.index');

        Route::group(['prefix' => '{depend}'], function () {
        Route::get('/change', 'DependController@change')->name('depend.change');
        Route::get('/remove', 'DependController@remove')->name('depend.remove');

     });
    });

    Route::group(['prefix' => 'reports'], function () {
        Route::get('/', 'ReportController@payment')->name('payment.report');
        
    });
   
});




require __DIR__.'/auth.php';
