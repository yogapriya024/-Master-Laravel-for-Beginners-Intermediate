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
//------------------------------------------------------------Routing------------------------------------------------------------
Route::get('/', function () {
    return 'Home page';
})->name('home.index');

Route::get('/contact', function () {
    return 'Contact';
})->name('home.contact');

Route::get('/posts/{id}', function ($id) {
    return 'Blog post' . $id;
})->name('posts.show');

Route::get('/recent-posts/{days_ago?}', function ($days_ago = 20) {
    return 'Post from' . $days_ago. 'days ago';
})->name('posts.recent.index');

//`````````````````````````where condition used in RouteServiceProvider````````````````````````````````````````````````````````````````
//Route::get('/posts/{id}', function ($id) {
//    return 'Blog post' . $id;
//})->where([
//    'id' => '[0-9]+'
//])->name('posts.show');
//------------------------------------------------------------End Routing------------------------------------------------------------

