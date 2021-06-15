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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/api/books', 'APIBookController@index');

Route::get('/api/books/{id}', 'APIBookController@show');

Route::get('/eshop', 'EshopController@index');

Route::get('/eshop/categories/{id}', 'EshopController@category');

Route::get('/eshop/subcategories/{id}', 'EshopController@subcategory');

Route::get('/bookshops/create', 'BookshopController@create');
Route::post('/bookshops', 'BookshopController@store');
Route::get('/bookshops', 'BookshopController@index');

Route::resource('/books', 'BookController');

Route::post('/books/{id}/review', 'BookController@storeReview');

// authors
Route::get('/authors', 'AuthorController@index');
Route::get('/authors/create', 'AuthorController@create');
Route::post('/authors', 'AuthorController@store')->name('authors.store');
Route::get('/authors/{id}/edit', 'AuthorController@edit');
Route::put('/authors/{id}', 'AuthorController@store')->name('authors.update');



Route::get('/publishers', 'PublisherController@index');
Route::get('/publishers/{id}', 'PublisherController@show');
