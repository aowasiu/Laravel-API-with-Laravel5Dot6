<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//List all articles
Route::get('articles', 'PundiitArticleController@index');

//List an article
Route::get('article/{id}', 'PundiitArticleController@show');

//Create an article
Route::post('article', 'PundiitArticleController@store');

//Update an article
Route::put('article', 'PundiitArticleController@store');

//Delete an article
Route::delete('article/{id}', 'PundiitArticleController@destroy');
