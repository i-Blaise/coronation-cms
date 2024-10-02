<?php

use App\Http\Controllers\Individual\AboutUsController;
use App\Http\Controllers\Individual\HomepageController;
use App\Http\Controllers\Individual\MotorInsuranceController;
use App\Http\Controllers\Individual\PnSController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
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
    Route::get('/', [HomepageController::class, 'index'])->name('home-header');
    Route::post('home-header/update', [HomepageController::class, 'updateHomeHeader'])->name('home-header-update');

    Route::get('home/section1', [HomepageController::class, 'homeSec1'])->name('home-sec1');
    Route::post('home/section1/update', [HomepageController::class, 'updateSection1'])->name('home-sec1-update');

    Route::get('home/section2', [HomepageController::class, 'homeSec2'])->name('home-sec2');
    Route::post('home/section2/update', [HomepageController::class, 'updateSection2'])->name('home-sec2-update');



    // About Us Page
    Route::prefix('about')->group(function () {
        Route::get('/header', [AboutUsController::class, 'index'])->name('about-header');
        Route::post('/header/update', [AboutUsController::class, 'updateAboutHeader'])->name('about-header-update');

        Route::get('/section1', [AboutUsController::class, 'aboutSec1'])->name('about-sec1');
        Route::post('/section1/update', [AboutUsController::class, 'updateSection1'])->name('about-sec1-update');

        Route::get('/section2', [AboutUsController::class, 'aboutSec2'])->name('about-sec2');
        Route::post('/section2/update', [AboutUsController::class, 'updateSection2'])->name('about-sec2-update');

        Route::get('/section3', [AboutUsController::class, 'aboutSec3'])->name('about-sec3');
        Route::post('/section3/update', [AboutUsController::class, 'updateSection3'])->name('about-sec3-update');

        Route::get('/section4', [AboutUsController::class, 'aboutSec4'])->name('about-sec4');
        Route::post('/section4/update', [AboutUsController::class, 'updateSection4'])->name('about-sec4-update');

        Route::get('/section5', [AboutUsController::class, 'aboutSec5'])->name('about-sec5');
        Route::get('/section5/create/bod', [AboutUsController::class, 'createBoD'])->name('about-create-bod');
        Route::post('/section5/add/bod', [AboutUsController::class, 'storeBoD'])->name('about-sec5-store');
        Route::get('/section5/{id}/edit', [AboutUsController::class, 'editBoD'])->name('about-sec5-edit');
        Route::post('/section5/{id}/update', [AboutUsController::class, 'updateBoD'])->name('about-sec5-update');
        Route::get('/section5/{id}/delete', [AboutUsController::class, 'deleteBoD'])->name('about-sec5-delete');
    });


    // Products and Solutions Page
    Route::prefix('pns')->group(function () {
        Route::get('/header', [PnSController::class, 'index'])->name('pns-header');
        Route::post('/header/update', [PnSController::class, 'updatePnSHeader'])->name('pns-header-update');


        Route::get('/section1', [PnSController::class, 'PnsSec1'])->name('pns-sec1');
        Route::post('/section1/update', [PnSController::class, 'updateSection1'])->name('pns-section1-update');
    });


    // Motor Insurance Page
    Route::prefix('motor')->group(function () {
        Route::get('/', [MotorInsuranceController::class, 'index'])->name('motor');
        Route::post('/update', [MotorInsuranceController::class, 'updateMotorInsurance'])->name('motor-update');
    });


});

require __DIR__.'/auth.php';








// Route::get('/', function () {
//     return view('auth.login');
// })->name('login');








