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

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\TestesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('start', [
        'articles' => App\Article::take(4)->latest()->get()
    ]);
});

Route::get('/template', function() {
    return view('welcome');
});

// Route::get('/teste', function(){
//     return view('teste');
// });

Route::get('/teste/list', 'TestesController@index')->name('teste.index');
Route::get('/teste', 'TestesController@create')->name('teste.create');
Route::post('/teste', 'TestesController@store')->name('teste.store');
Route::get('/downloadPDF/{id}', 'TestesController@downloadPDF');

Route::get('/articles', 'ArticlesController@index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/download/{article}', 'ArticlesController@downloadPDF');
Route::get('/articles/{article}', 'ArticlesController@show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update');
