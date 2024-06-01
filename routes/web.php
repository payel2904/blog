<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/video', function () {
    return view('frontend/video');
})->name('frontend.video');

Route::get('/contact', function () {
    return view('frontend/contact');
})->name('frontend.contact');

//Route::group(['prefix' => 'admin'], function () {
//    Route::get('/', function(){
//       return view('backend.dashboard');
//    })->name('admin.dashboard');
//    Route::group(['prefix' => 'posts'], function () {
//       Route::get('/', function (){
//          return view('backend.posts.index');
//       })->name('admin.posts.index');
//       Route::get('/create', function (){
//           return view('backend.posts.create');
//       })->name('posts.create');
//        Route::get('/submit', function (){
//            return view('backend.posts.index');
//        })->name('admin.posts.store');
//    });
//});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('backend.dashboard');
    })->name('admin.dashboard');

    Route::resource('posts', PostController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('tags', TagController::class);
    Route::resource('users', UserController::class);
});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/blogs', [BlogController::class, 'index'])->name('frontend.blogs.index');
Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('frontend.blogs.show');
