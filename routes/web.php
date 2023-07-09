<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
    
});

Route::get('/home', 'App\Http\Controllers\Controller@returnView')->defaults('view', 'home');
Route::get('/live', 'App\Http\Controllers\Controller@returnView')->defaults('view', 'live');
Route::get('/sns', 'App\Http\Controllers\Controller@returnView')->defaults('view', 'sns');

