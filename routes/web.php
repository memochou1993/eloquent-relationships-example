<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/{user}', function($user) {
    // return App\User::find($user)->phone()->get();
    // return App\User::find($user)->posts()->get();
    return App\User::find($user)->colors()->get();
});

Route::get('/phones/{phone}', function($phone) {
    return App\Phone::find($phone)->user()->get();
});

Route::get('/posts/{post}', function($post) {
    return App\Post::find($post)->user()->get();
});

Route::get('/colors/{color}', function($color) {
    return App\Color::find($color)->users()->get();
});
