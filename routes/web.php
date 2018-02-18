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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/character',                'CharacterController@index')    ->name('character.index');
Route::get('/character/new',            'CharacterController@create')   ->name('character.create');
Route::post('/character/new',           'CharacterController@store')    ->name('character.save');
Route::get('/character/{id}',           'CharacterController@show')     ->name('character.view');
Route::get('/character/{id}/edit',      'CharacterController@edit')     ->name('character.edit');
Route::post('/character/{id}/edit',     'CharacterController@update')   ->name('character.update');
Route::get('/character/{id}/delete',    'CharacterController@destroy')  ->name('character.delete');

Route::resource('race', 'RaceController');
