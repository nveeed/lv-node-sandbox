<?php

Route::get('/job', 'Controller@job');
Route::get('/', function () {
    return view('welcome');
});
