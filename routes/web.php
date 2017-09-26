<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/solid', 'SolidController@index');
Route::get('/refactor', 'RefactorController@index');
