<?php

Route::get('/', 'ReportsController@index');
Route::get('/reports/create', 'ReportsController@create');
Route::get('/reports/{report}', 'ReportsController@show');