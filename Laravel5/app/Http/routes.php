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
    return view('index');
});
Route::get('/', function () {
    return view('index')->with('description', 'Moderna - Главная страница')
                        ->with('title', 'Moderna - Главная страница');
});
Route::get('/{page}', function ($page) {
    $data = array('description' => 'Moderna - ' . $page, 
                  'title' => 'Moderna - ' . $page);
    return view($page, $data);
});

Route::auth();

Route::get('/home', 'HomeController@index');


// Маршруты аутентификации...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Маршруты регистрации...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');