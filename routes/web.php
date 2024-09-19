<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/section1', function () {
    return view('pages.header.section1');
});

Route::get('/section2', function () {
    return view('pages.header.section2');
});
