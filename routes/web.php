<?php
App::setLocale('es');

use Illuminate\Support\Facades\Route;
//NOTA: el view retorna automaticamente el archivo blade, y es recomendado 
//usarlo cuando para paginass basicas como home,about, politicas de uso etc.

//--------------------------------------------------------------------------------------
//                Rutas Menu                                                          /
//-----------------------------------------------------------------------------------
Route::view('/', 'home')->name('home');
Route::view('/sobre-mi', 'about')->name('about'); 
Route::get('/otros-proyectos','PortafolioController@index')->name('portafolio');
//-----------------------------------------------
//                Rutas Contactame              |
//-----------------------------------------------
Route::view('/contactanos', 'contact')->name('contact');
Route::post('contact', 'FormularioContactController@store')->name('messages.store');

//--------------------------------------------------------------------------------------
//                Rutas Clientes                                                      /
//-----------------------------------------------------------------------------------
Route::resource('clientes', 'clientesController');
//--------------------------------------------------------------------------------------
//                Rutas Usuarios                                                      /
//-----------------------------------------------------------------------------------
Route::resource('usuarios', 'usuariosController');
//--------------------------------------------------------------------------------------
//                Rutas Productos                                                     /
//-----------------------------------------------------------------------------------
Route::resource('productos', 'ProductosController');//->names('productos')->parameters(['producto' => 'product']);//esto es para cambiar el parametro pero en el controlador lo tengo como producto 

//NOTA: es muy importante el orden de las rutas ya que si por ejemplo la ruta /productos/{producto} se encuentra arriba al intentar acceder a /productos/crear genera un error
//Route::get('/productos', 'ProductosController@index')->name('productos.index');
//Route::get('/productos/crear', 'ProductosController@create')->name('productos.create');
//Route::get('/productos/{producto}/editar','ProductosController@edit')->name('productos.edit');
//Route::patch('/productos/{producto}', 'ProductosController@update')->name('productos.update');
//Route::post('/productos', 'ProductosController@store')->name('productos.store');
//Route::get('/productos/{producto}', 'ProductosController@show')->name('productos.show');
//Route::delete('/productos/{producto}','ProductosController@destroy')->name('productos.destroy');

Auth::routes();//Auth::routes(['register' => false]); //['register' => false] //es para que no se pueda acceder a esa ruta