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

Route::get('/', 'PostController@index')->name('index');

Route::get('/create', 'PostController@create')->name('create')->middleware('isLoggedIn');
Route::post('/create', 'PostController@store')->middleware('isLoggedIn');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (\Illuminate\Http\Request $request) {
    if($request->secret === env('SECRET')) {
        session(['secret' => env('SECRET')]);
        return redirect(route('create'));
    } else {
        return back()->withErrors('Incorrect Secret');
    }
});

Route::get('/{post}', 'PostController@show')->name('show');
Route::delete('/{post}', 'PostController@delete')->name('delete');