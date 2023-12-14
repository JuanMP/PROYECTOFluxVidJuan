<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('date', function() {
    return date('d/m/y h:i:s');
});

Route::get('/', function(){
    return "Hola, soy Juan, bienvenido a FluxVid";
})->name('index');

Route::get('/movies', function(){
    return "Listado de películas de FluxVid";
})->name('movies');

Route::get('movies/{id}', function($id){
    return "Esta es la movie: $id";
})->where('id', '[0-9]+')->name('movies.id');

