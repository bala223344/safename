<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

Route::get('/', function () use ($router) {
    return view('welcome');
});

Route::get('sn/fetchscam', [
    'uses' => 'SafeNameController@fetchAndInsertScam'
]);

Route::get('sn/{addr}', [
    'uses' => 'SafeNameController@details'
]);
Route::get('alias/{alias}', [
    'uses' => 'SafeNameController@alias'
]);

