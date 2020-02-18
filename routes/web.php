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

Route::get('/ajouter', function () {
    return view('ajouter');
})->name('ajouter');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('skill', 'SkillController@store')->name('skill.store');
