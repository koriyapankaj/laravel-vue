<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    // return view('welcome');

    return Inertia::render('Home', [
        'event' => '123'
    ]);

});



