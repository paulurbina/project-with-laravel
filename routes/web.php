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

Route::get('/', 'PagesController@index')->name('inicio');

Route::get('/detalle/{id}', 'PagesController@detalle')->name('notas.detalle');

Route::post('/', 'PagesController@crear')->name('notas.crear');

Route::get('/editar/{id}', 'PagesController@editar')->name('notas.editar');
Route::put('/editar/{id}', 'PagesController@update')->name('notas.update');

Route::get('fotos', 'PagesController@fotos')->name('fotografias');

Route::get('noticias', 'PagesController@blog')->name('noticias');

Route::get('about/{nombre?}', 'PagesController@about')->name('nosotros');