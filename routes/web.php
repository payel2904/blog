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
    return view('frontend/home');
})->name('frontend.home');

Route::get('/about', function () {
    return view('frontend/about');
})->name('frontend.about');

Route::get('/video', function (){
    return view('frontend/video');
})->name('frontend.video');

Route::get('/contact', function () {
    return view('frontend/contact');
})->name('frontend.contact');

