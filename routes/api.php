<?php

use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/home/fetch', [ApiController::class, 'homepage']);
Route::get('/about/fetch', [ApiController::class, 'aboutpage']);
Route::get('/bod/fetch', [ApiController::class, 'bod']);
Route::get('/pns/fetch', [ApiController::class, 'pns']);
Route::get('/motor/individual/fetch', [ApiController::class, 'individualMotorInsurance']);

Route::get('/travel/individual/fetch', [ApiController::class, 'individualTravelInsurance']);

Route::get('/home/individual/fetch', [ApiController::class, 'individualHomeInsurance']);

Route::get('/published-blogs', [ApiController::class, 'fetchPublishedBlogs']);
Route::get('/published-blogs/cards', [ApiController::class, 'fetchPublishedBlogsCards']);
Route::get('/published-blogs/cards/latest-two', [ApiController::class, 'fetchPublishedBlogsCardsLatestTwo']);
Route::get('/blog/{id}/details', [ApiController::class, 'fetchBlogDetail']);
Route::get('/blog-categories', [ApiController::class, 'getBlogCategories']);
