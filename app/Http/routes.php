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

Route::group(['middleware' => []], function () {
  Route::get('/', ['as' => 'home-index', 'uses' => 'HomeController@index']);
  Route::get('map/esri', ['as' => 'map-esri', 'uses' => 'MapController@esri']);
  Route::get('map/google', ['as' => 'map-google', 'uses' => 'MapController@google']);
});