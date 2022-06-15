<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('index');
})->name('index');

    Route::get('/about', function () {
    return view('about.index');
})->name('about');

Route::get('/gallery', function () {
    return view('gallery.index');
})->name('gallery');

Route::get('/list', [\App\Http\Controllers\Controller::class, 'listOfChild'])->name('listOfChild');

Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');

Route::get('/register', [\App\Http\Controllers\Controller::class, 'register'])->name('register');
Route::post('/register', [\App\Http\Controllers\Controller::class, 'registerPost'])->name('register.post');
