<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TestApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');

//Route::get('teste', 'TestApi@index');

Route::group(['middleware' => ['api']], function(){
    Route::post('me', 'AuthController@me');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
});

