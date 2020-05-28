<?php
App::setLocale('es');

use Illuminate\Support\Facades\Route;
//NOTA: el view retorna automaticamente el archivo blade, y es recomendado 
//usarlo cuando para paginass basicas como home,about, politicas de uso etc.

//--------------------------------------------------------------------------------------
//                Rutas Menu                                                          /
//-----------------------------------------------------------------------------------
Route::view('/', 'home')->name('home');
Route::view('/mygym', 'mygym')->name('mygym');
Route::view('/sobre-mi', 'about')->name('about'); 
Route::get('/otros-proyectos','PortafolioController@index')->name('portafolio');
//-----------------------------------------------
//                Rutas Contactame              |
//-----------------------------------------------
Route::view('/contactanos', 'contact')->name('contact');
Route::post('contact', 'FormularioContactController@store')->name('messages.store');

//--------------------------------------------------------------------------------------
//                Rutas Gym                                                      /
//-----------------------------------------------------------------------------------
Route::resource('gyms', 'gymController');
//--------------------------------------------------------------------------------------
//                Rutas Clientes                                                      /
//-----------------------------------------------------------------------------------
Route::resource('clientes', 'clientesController');
//--------------------------------------------------------------------------------------
//                Rutas Reportes                                                      /
//-----------------------------------------------------------------------------------
Route::resource('reportes', 'reporteController');
//--------------------------------------------------------------------------------------
//                Rutas Usuarios                                                      /
//-----------------------------------------------------------------------------------
Route::resource('usuarios', 'usuariosController');
//--------------------------------------------------------------------------------------
//                Rutas Productos                                                     /
//-----------------------------------------------------------------------------------
Route::resource('productos', 'ProductosController');//->names('productos')->parameters(['producto' => 'product']);//esto es para cambiar el parametro pero en el controlador lo tengo como producto 



Auth::routes();//Auth::routes(['register' => false]); //['register' => false] //es para que no se pueda acceder a esa ruta