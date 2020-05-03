<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('/nosotros', 'about')->name('about');
Route::get('/portafolio', 'PortfolioController@index')->name('portfolio');
Route::view('/contactanos', 'contact')->name('contact');

Route::post('contact', 'FormularioContactController@store')->name('contact');