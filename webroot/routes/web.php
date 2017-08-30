<?php

Route::get('/', 'ReportsController@index');
Route::get('/reports/{report}', 'ReportsController@show');