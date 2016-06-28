<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Collection of routes for the API.
|
*/

$api = app(Dingo\Api\Routing\Router::class);

$api->version('v1', function() use ($api) {
    $api->post('/auth/generate-token', 'App\Http\Controllers\Auth\AuthController@authenticate');
    $api->get('/auth/refresh-token', 'App\Http\Controllers\Auth\AuthController@refreshToken');

    $api->group(['middleware' => 'api.auth'], function() use ($api) {
        $api->get('/auth/user', 'App\Http\Controllers\Auth\AuthController@getUserInfo');

        $api->group(['middleware' => 'administrator'], function() use ($api) {
            $api->get('/admin', 'App\Http\Controllers\Admin\DashboardController@home');
        });

        $api->group(['middleware' => 'mahasiswa'], function() use ($api) {
            $api->get('/mahasiswa', 'App\Http\Controllers\Mahasiswa\DashboardController@home');
        });
    });
});