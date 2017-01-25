<?php

Route::get('/job', 'Controller@job');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/redis-pub', function () {
    $data = [
        'event' => 'testEvent',
        'data' => [
            'id' => 1,
            'name' => 'Someone',
        ],
    ];

    app('redis')->publish('test-channel', json_encode($data));

    dd($data);
    return 'published';
});