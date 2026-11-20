<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/versio', function () {
    return response()->json([
        'version' => config('app.version'),
    ]);
});
