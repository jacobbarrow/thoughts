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
    return view('posts.index');
})->name('index');

Route::get('/some-blog-post', function() {
    $post = [
        'title' => 'on McDonald\'s Monopoly',
        'text' => '<p>Hello</p>'
    ];
    return view('posts.show', compact('post'));
});

Route::get('/create', function() {
    return view('admin.index');
});