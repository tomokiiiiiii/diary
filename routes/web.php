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

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/diaries', function () {
    return view('diaries/top');
});


Route::get('/top', 'TopController@diaries')->name('top');

Route::get('/diaries/{diary}', 'TopController@show');

Route::get('top/create','TopController@create');

Route::post('/top', 'TopController@store');

//Route::post('top','TopController@store');