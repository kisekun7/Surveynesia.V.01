<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('surveynesia' , 'frondendController@index');
Route::get('login' , 'registController@index')->name('survey.login');
Route::get('register' , 'registController@register')->name('survey.register');

Route::get('survey','SurveyController@index');
Route::get('survey/{code_survey}/review','SurveyController@review');
Route::post('survey','SurveyController@create');
Route::get('survey/{survey_id}/question','SurveyController@question');
Route::post("survey/{survey_id}/question","SurveyController@addMorePost");
Route::get('survey/{survey_id}/viewquestion','SurveyController@viewquestion');
Route::get('survey/{survey_id}/question/{code_quest}/detail','SurveyController@detail');
Route::delete('survey/{question_id}','SurveyController@destroy')->name('quest.destroy');

// Route::get("addmore","HomeController@addMore");
// Route::post("survey/1/question","HomeController@addMorePost");

