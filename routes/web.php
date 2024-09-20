<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.homepage.header');
})->name('home-header');

Route::get('/section1', function () {
    return view('pages.homepage.section1');
})->name('home-sec1');

Route::get('/section2', function () {
    return view('pages.homepage.section2');
})->name('home-sec2');




Route::get('/about', function () {
    return view('pages.aboutpage.header');
})->name('about-header');

Route::get('/about-sec1', function () {
    return view('pages.aboutpage.section1');
})->name('about-sec1');

Route::get('/about-sec2', function () {
    return view('pages.aboutpage.section2');
})->name('about-sec2');

Route::get('/about-sec3', function () {
    return view('pages.aboutpage.section3');
})->name('about-sec3');

Route::get('/about-sec4', function () {
    return view('pages.aboutpage.section4');
})->name('about-sec4');


Route::get('/about-sec5', function () {
    return view('pages.aboutpage.section5');
})->name('about-sec5');
