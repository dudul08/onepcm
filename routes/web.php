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
Route::view('/', 'accueil.index')->name('accueil');

Route::group(['middleware' => 'auth'],function (){
    Route::resource('enfants', 'EnfantController')->except([
        'show'
    ]);
    Route::get('enfants/{enfant}/confirmation', 'EnfantController@confirmation')->name('enfants.confirmation');
    Route::get('enfants/liste', 'EnfantController@liste')->name('enfants.liste');

    Route::resource('responsables', 'ResponsableController')->except([
        'show'
    ]);

    Route::get('responsables/{responsable}/confirmation', 'ResponsableController@confirmation')->name('responsables.confirmation');
    Route::get('responsables/liste', 'ResponsableController@liste')->name('responsables.liste');
    Route::get('responsable/actif', 'ResponsableController@getUserActif')->name('responsable.actif');


    Route::get('taches', 'TacheController@index')->name('taches.index');
    Route::post('taches', 'TacheController@store')->name('taches.store');
    Route::get('taches/create', 'TacheController@create')->name('taches.create');
    Route::get('taches/{tache}/edit', 'TacheController@edit')->name('taches.edit');
    Route::patch('taches/{tache}', 'TacheController@update')->name('taches.update');
    Route::delete('taches/{tache}','TacheController@destroy')->name('taches.destroy');
    Route::get('taches/{tache}/confirmation', 'TacheController@confirmation')->name('taches.confirmation');
    Route::get('taches/liste', 'TacheController@liste')->name('taches.liste');


//    Route::resource('bonspoints', 'BonPointController')->except([
//        'show']);
    Route::get('bonspoints', 'BonPointController@index')->name('bonspoints.index');
    Route::get('bonspoints/create', 'BonPointController@create')->name('bonspoints.create');
    Route::get('bonspoints/{bonpoint}/confirmation', 'BonPointController@confirmation')->name('bonspoints.confirmation');
    Route::get('bonspoints/{bonpoint}/edit', 'BonPointController@edit')->name('bonspoints.edit');
    Route::post('bonspoints', 'BonPointController@store')->name('bonspoints.store');
//    Route::resource('categoriestaches', 'CategorieTacheController')->except([
//        'show']);


    Route::get('categoriestaches', 'CategorieTacheController@index')->name('categoriestaches.index');
    Route::post('categoriestaches', 'CategorieTacheController@store')->name('categoriestaches.store');
    Route::get('categoriestaches/create', 'CategorieTacheController@create')->name('categoriestaches.create');
    Route::get('categoriestaches/{categorieTache}/edit', 'CategorieTacheController@edit')->name('categoriestaches.edit');
    Route::patch('categoriestaches/{categorieTache}', 'CategorieTacheController@update')->name('categoriestaches.update');
    Route::delete('categoriestaches/{categorieTache}','CategorieTacheController@destroy')->name('categoriestaches.destroy');
    Route::get('categoriestaches/{categorieTache}/confirmation', 'CategorieTacheController@confirmation')->name('categoriestaches.confirmation');




});

Auth::routes(['register' => false]);

//Route::get('/home', 'HomeController@index')->name('home');
