<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudiantesController;




Route::view('/','home')->name('home');
Route::get('listado','App\Http\Controllers\EstudiantesController@index')->name('listado');
Route::get('estudiantes/ingreso','App\Http\Controllers\EstudiantesController@create')->name('estudiantes.create');
Route::view('ingreso','ingreso')->name('ingreso');
Route::post('/estudiantes', 'App\Http\Controllers\EstudiantesController@store')->name('estudiantes.store');


Route::get('estudiantes/{estudiante}', 'App\Http\Controllers\EstudiantesController@show')->name('estudiante');


