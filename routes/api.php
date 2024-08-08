<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('informations', 'Api\InformationController@index');
Route::get('categories', 'Api\CategoryController@index');
Route::get('quizzes', 'Api\QuizController@index');
Route::get('keywords', 'Api\KeywordController@index');
Route::get('ranking', 'Api\RankingController@index');
Route::post('register', 'Auth\RegisterController@apiRegister');
