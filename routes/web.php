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
    Route::apiResource('user', 'User');
  //  Route::apiResource('alumno', 'controllerAlumnos@store');
});

Route::group(['prefix'=>'api'], function(){
    Route::apiResource('inmuebles', 'Inmuebles');
  //  Route::apiResource('alumno', 'controllerAlumnos@store');
});

Route::group(['prefix'=>'api'], function(){
    Route::apiResource('ventas', 'Ventas');
  //  Route::apiResource('alumno', 'controllerAlumnos@store');
});

Route::group(['prefix'=>'api'], function(){
    Route::apiResource('estados', 'Estados');
  //  Route::apiResource('alumno', 'controllerAlumnos@store');
});

Route::group(['prefix'=>'api'], function(){
    Route::apiResource('municipios', 'Municipios');
  //  Route::apiResource('alumno', 'controllerAlumnos@store');
});

Route::group(['prefix'=>'api'], function(){
    Route::apiResource('inmuebleservicios', 'Inmuebleservicios');
  //  Route::apiResource('alumno', 'controllerAlumnos@store');
});

Route::group(['prefix'=>'api'], function(){
    Route::apiResource('servicios', 'Servicios');
  //  Route::apiResource('alumno', 'controllerAlumnos@store');
});