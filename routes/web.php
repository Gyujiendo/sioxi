<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\LiveController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


/* These routes are not relevant for now */
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


/* Routes for Homepage related */
Route::get('/home', 'App\Http\Controllers\HomeController@read');

/* Routes for Bio */
Route::get('/bio', function () {
    return view('bio');
});

/* Routes for Bio */
Route::get('/store', function () {
    return view('store');
});

/* Routes for Live shows related*/
Route::get('/live', 'App\Http\Controllers\LiveController@read');
Route::post('/create_live', [LiveController::class, 'create'])->name('create_live');
Route::post('/add_pictures/{live_id}', [LiveController::class, 'AddPictures'])->name('add_pictures');
Route::delete('/live/{id}', [LiveController::class, 'delete'])->name('delete_live');
Route::get('/live/{id}/edit', [LiveController::class, 'edit'])->name('live.edit');
Route::get('/live/{id}/delete_pic', [LiveController::class, 'delete_pic'])->name('delete_live_pic');
Route::put('/live/{id}', [LiveController::class, 'update'])->name('live.update');
Route::post('/add_thumbnail/{live_id}', [LiveController::class, 'addThumbnail'])->name('add_thumbnail');
Route::delete('/delete-gallery/{live_id}', [LiveController::class, 'deleteGallery'])->name('delete_gallery');


/* Routes for Tracks/Tracklist related*/
Route::get('/tracklist', 'App\Http\Controllers\TrackController@read');
Route::post('/tracks', [TrackController::class, 'create'])->name('create_track');
Route::delete('/tracks/{id}', [TrackController::class, 'delete'])->name('delete_track');
Route::get('/tracks/{id}/edit', [TrackController::class, 'edit'])->name('tracks.edit');
Route::put('/tracks/{id}', [TrackController::class, 'update'])->name('tracks.update');
Route::put('/tracks_pic/{id}', [TrackController::class, 'update_pic'])->name('tracks.update_pic');


/* Routes for Laravel's default login auth system */
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
