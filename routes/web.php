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
Route::view('/','bonspoints.index');
Route::resource('enfants','EnfantController');
Route::resource('parents','ParentController');
Route::resource('taches','TacheController');
Route::resource('bonspoints','BonPointController');
Route::get('enfants/{enfant}/confirmation', 'EnfantController@confirmation')->name('enfants.confirmation');//
//Route::view('enfants/confirmation/{id}','enfants.confirmationSuppression')->name('enfants.confirmation');




