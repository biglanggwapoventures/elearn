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

Route::group(['prefix' => 'questionaire', 'middleware' => 'auth'], function () {
    Route::get('responses', 'ViewResponses@index');
    Route::get('responses/ethics/{submittedResponse}', 'ViewResponses@viewEthicsResponse');
    Route::get('responses/work/{submittedResponse}', 'ViewResponses@viewWorkResponse');

    Route::get('ethics', 'QuestionaireController@ethics');
    Route::get('work', 'QuestionaireController@work');
    Route::post('work', 'QuestionaireController@saveWorkSetResponse');
    Route::post('ethics', 'QuestionaireController@saveEthicsSetResponse');
});

