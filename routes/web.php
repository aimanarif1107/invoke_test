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
Route::get('survey', 'SurveyController@index');

Route::get('survey/question', 'SurveyController@question')->name('question'); 
Route::get('survey/answer', 'SurveyController@answer'); 
Route::get('survey/{id}', 'SurveyController@show');

Route::post('survey', 'SurveyController@store');
Route::get('/', function(){
    return view('first');
});