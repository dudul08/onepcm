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
Route::view('/', 'bonspoints.index');
Route::resource('enfants', 'EnfantController')->except([
    'show'
]);;
Route::resource('parents', 'ResponsableController')->except([
    'show'
]);;;
Route::resource('taches', 'TacheController')->except([
    'show'
]);;;
Route::resource('bonspoints', 'BonPointController')->except([
    'show'
]);;;
Route::get('enfants/{enfant}/confirmation', 'EnfantController@confirmation')->name('enfants.confirmation');//





