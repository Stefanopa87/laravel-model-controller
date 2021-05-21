<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'MoviesController@home') -> name('home');


Route::get('film/{id}', 'MoviesController@film') -> name('film');


