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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//QuestionnaireController
Route::get('/questionnaires','QuestionnaireController@index');
Route::get('/questionnaires/create','QuestionnaireController@create');
Route::post('/questionnaires','QuestionnaireController@store');
Route::get('/questionnaires/{id}','QuestionnaireController@show');


//Questions
Route::get('/questionnaires/{questionnaire}/questions/create','QuestionController@create');
Route::post('/questionnaires/{questionnaire}/questions','QuestionController@store');
Route::DELETE('/questionnaires/{questionnaire}/questions/{question}','QuestionController@destroy');


//Survey

Route::get('surveys/{questionnaire}-{slug}','SurveyController@show');
Route::post('surveys/{questionnaire}-{slug}','SurveyController@store');

Route::resource('photos', 'PhotoController');


