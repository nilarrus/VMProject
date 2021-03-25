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

//Joc Multijugador seleccionar sala
Route::get('/mpl', 'GameMulti@launchSelectRoom')->name('multiMenu');
Route::get('/mplrl', 'GameMulti@launchSelectListRoom')->name('multiRoomList');

//Guardar al ranking 
Route::post('/store', 'GamePlayerOne@store')->name('store');

//ruta del ranking
Route::get('/r', 'rank@getRanking')->name('rank');


