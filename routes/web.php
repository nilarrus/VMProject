<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

//Menu principal
Route::get('/menu', 'HomeController@index')->name('menu');

//Joc un jugador
Route::post('/gp1', 'GamePlayerOne@launchGame')->name('gp1');

//Joc Multijugador
Route::post('/mpl', 'GameMulti@launchGame')->name('multi');

//Guardar al ranking 
Route::post('/store', 'GamePlayerOne@store')->name('store');

//ruta del ranking
Route::get('/r', 'rank@getRanking')->name('rank');


