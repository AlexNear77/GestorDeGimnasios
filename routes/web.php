<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('/quienes-somos', 'about')->name('about');
//-----------------------------------------------
//                Rutas Proyectos
//-----------------------------------------------
Route::get('/portafolio', 'ProyectController@index')->name('proyects.index');
Route::get('/portafolio/crear', 'ProyectController@create')->name('proyects.create');
Route::post('/portafolio', 'ProyectController@store')->name('proyects.store');
Route::get('/portafolio/{proyect}', 'ProyectController@show')->name('proyects.show');


//-----------------------------------------------
//                Rutas Contacts
//-----------------------------------------------
Route::view('/contactanos', 'contact')->name('contact');
Route::post('contact', 'FormularioContactController@store')->name('messages.store');