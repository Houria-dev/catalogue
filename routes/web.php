<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function()
{
  return view('welcome');
});

##############################################################################################################################   TOUTES LES ROUTES QUI GERENT LES ARTICLES: LES OUVRES D'ARTS  ####################################################
#######################################################################################################################

Route::get('/articles', 'App\Http\Controllers\ArticleController@index')->name('articles');
Route::get('/categories', 'App\Http\Controllers\CategorieController@index')->name('categories');
//Route::get('/', 'App\Http\Controllers\ArticleController@index')->name('articles')->middleware('auth');
Route::get('/articles/nouveau', 'App\Http\Controllers\ArticleController@create')->name('articles_create');
Route::get('/articles/{id}/show', 'App\Http\Controllers\ArticleController@show')->name('articles_show');
Route::get('/articles/{id}/edit', 'App\Http\Controllers\ArticleController@edit')->name('articles_edit');
Route::post('/articles/store', 'App\Http\Controllers\ArticleController@store')->name('articles_store');
Route::get('/articles/{id}/delete', 'App\Http\Controllers\ArticleController@destroy')->name('articles_delete');
Route::put('/articles/{id}/update', 'App\Http\Controllers\ArticleController@update')->name('articles_update');


##############################################################################################################################   TOUTES LES ROUTES QUI GERENT L' AUTHENTIFICATION  ####################################################
#######################################################################################################################
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', function(){
  auth()->logout();
  Session()->flush();
  return Redirect::to('/');
});



##############################################################################################################################   TOUTES LES ROUTES QUI GERENT LE PANIER  ####################################################
#######################################################################################################################

Route::get('/panier', 'App\Http\Controllers\CartController@index')->name('panier');
Route::get('/panier/{id}/add', 'App\Http\Controllers\CartController@add')->name('panier_add');

