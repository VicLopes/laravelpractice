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

Route::get('/', function () {
    return view('start', [
        'articles' => App\Article::take(4)->latest()->get()
    ]);
});

Route::get('/articles', 'ArticlesController@index');

Route::get('/articles/{article}', 'ArticlesController@show');