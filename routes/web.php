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
Route::post('/mpl', 'GameMulti@launchSelectRoom')->name('multiMenu');

Route::post('/mprp','GameListRoom@inputPassword')->name('multiRoomPass');

Route::post('/mplrch','GameListRoom@checkPasRoom')->name('checkPasswordRoom');

Route::get('/mplrl', 'GameListRoom@launchSelectListRoom')->name('multiRoomList');

//Llençar la sala multiplayer
Route::post('/mplsl', 'NewRoom@newRoom')->name('multisala');

//calls Ajax
Route::post('/c','ajaxcalls@getCels')->name('correctCels');

//ruta temp 
Route::post('/mpDelete', 'NewRoom@DeleteTemp')->name('deleteRoom');

//Guardar al ranking 
Route::post('/store', 'GamePlayerOne@store')->name('store');

//ruta del ranking
Route::get('/r', 'rank@getRanking')->name('rank');


//test ajax
/*
Route::get('ajax', function () {
    return view('ajaxTest');
});

Route::post('/getm', 'ajxController@msgajax')->name('tAjax');
*/


