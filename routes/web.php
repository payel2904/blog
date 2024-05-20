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
//       })->name('admin.posts.create');
//        Route::get('/submit', function (){
//            return view('backend.posts.index');
//        })->name('admin.posts.store');
//    });
//});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function(){
       return view('backend.dashboard');
    })->name('admin.dashboard');
    Route::group(['prefix' => 'posts'], function () {
        Route::get('/', function () {
            return view('backend.posts.index');
        })->name('admin.posts.index');
        Route::get('/create', function () {
            return view('backend.posts.create');
        })->name('admin.posts.create');
        Route::get('/submit', function () {
            return view('backend.posts.index');
        })->name('admin.posts.store');
    });

    Route::group(['prefix' => 'categories'], function () {
       Route::get('/', function () {
           return view('backend.category.index');
       })->name('admin.categories.index');
       Route::get('/create', function () {
           return view('backend.category.create');
       })->name('admin.categories.create');
    });
    Route::group(['prefix'=> 'tag'], function () {
        Route::get('/', function () {
            return view('tag/index');
        })->name('admin.tag.index');
    });

    Route::group(['prefix'=> 'tag'], function () {
        Route::get('/', function () {
            return view('tag/create');
        })->name('admin.tag.create');
    });
});

