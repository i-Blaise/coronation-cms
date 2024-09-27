<?php

use App\Http\Controllers\Individual\HomepageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
})->name('login');

// Route::get('/dashboard', function () {
//     return view('pages.homepage.header');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    // Homepage
    // Route::resource('home-header', HomepageController::class)->only(['index']);
    Route::get('home-header', [HomepageController::class, 'index'])->name('home-header');
    Route::post('home-header/update', [HomepageController::class, 'updateHomeHeader'])->name('home-header-update');

    Route::get('home/section1', [HomepageController::class, 'homeSec1'])->name('home-sec1');
    Route::post('home/section1/update', [HomepageController::class, 'updateSection1'])->name('home-sec1-update');
});

require __DIR__.'/auth.php';








// Route::get('/', function () {
//     return view('auth.login');
// })->name('login');


// Route::get('/homepage', function () {
//     return view('pages.homepage.header');
// })->name('home-header');

// Route::get('/section1', function () {
//     return view('pages.homepage.section1');
// })->name('home-sec1');

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

Route::get('/about-add-member', function () {
    return view('pages.aboutpage.add-member');
})->name('add-member');

