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

Route::get('/', 'JobController@index');

Route::get('jobs', 'JobController@index');
Route::get('jobs/create', 'JobController@create')->middleware('auth');
Route::get('jobs/{id}', 'JobController@index');
Route::get('jobs/detail/{id}', 'JobController@show');
Route::post('jobs', 'JobController@store');
Route::get('jobs/edit/{id}', 'JobController@edit')->middleware('auth');;
Route::put('jobs/update/{id}', 'JobController@update')->middleware('auth');;
Route::delete('jobs/delete/{id}', 'JobController@destroy')->middleware('auth');;

Route::get('jobs/empty', function(){
    return view('empty');
});




Auth::routes([
    'register'=>false
]);



Route::get('/home', 'HomeController@index')->name('home');
