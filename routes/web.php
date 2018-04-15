<?php


//use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});




Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
Route::any('/search', 'WeatherController@search')->name('search');
Route::get('/show', 'WeatherController@showCities')->name('showCities');
Route::get('cities/show/{city}', 'WeatherController@showWeather')->name('showWeather');









