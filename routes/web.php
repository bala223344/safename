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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('sn/fetchscam', [
    'uses' => 'SafeNameController@fetchAndInsertScam'
]);

$router->get('sn/{addr}', [
    'uses' => 'SafeNameController@details'
]);
$router->get('alias/{alias}', [
    'uses' => 'SafeNameController@alias'
]);

