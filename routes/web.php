<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'api'], function(){
    Route::apiResource('user', 'UserController');
});

Route::group(['prefix'=>'api'], function(){
    Route::apiResource('inmuebles', 'InmueblesController');
});

Route::group(['prefix'=>'api'], function(){
    Route::apiResource('ventas', 'VentasController');
});

Route::group(['prefix'=>'api'], function(){
    Route::apiResource('estados', 'EstadosController');
});

Route::group(['prefix'=>'api'], function(){
    Route::apiResource('municipios', 'MunicipiosController');
});

Route::group(['prefix'=>'api'], function(){
    Route::apiResource('inmuebleservicios', 'InmuebleserviciosController');
});

Route::group(['prefix'=>'api'], function(){
    Route::apiResource('servicios', 'ServiciosController');
});