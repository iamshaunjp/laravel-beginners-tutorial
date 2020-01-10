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

// pizza routes
Route::get('/pizzas', 'PizzaController@index')->name('pizzas.index')->middleware('auth');
Route::get('/pizzas/create', 'PizzaController@create')->name('pizzas.create');
Route::post('/pizzas', 'PizzaController@store')->name('pizzas.store');
Route::get('/pizzas/{id}', 'PizzaController@show')->name('pizzas.show')->middleware('auth');
Route::delete('/pizzas/{id}', 'pizzaController@destroy')->name('pizzas.destroy')->middleware('auth');

Auth::routes([
  'register' => false,
]);

Route::get('/home', 'HomeController@index')->name('home');
