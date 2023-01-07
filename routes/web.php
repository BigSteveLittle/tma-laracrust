<?php

use Illuminate\Http\Request;
use Illuminate\View\ViewName;
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

Route::get('/', function () {
    return view('welcome');
});

// NEW ROUTE.

Route::get('/', function() {
    return view('crusts', [
        'heading1' => 'Latest Crusts', 
        'heading2' => 'Crustings'
    ]);
});

// 1. 'Route::get': passes an end point and a function that returns a view.
Route::get('/hello', function() {
    return response('<h1>Hey Bro!</h1>', 200)
        ->header('Content-Type', 'text/plain')
        ->header('foo', 'boo');
});
// 2. 'variableOrObject': description.
Route::get('/posts/{num}', function($num) {
    // dd($num);
    // ddd($num);
    return response(htmlspecialchars('Posts: ' . $num));
})->where('num', '[0-9]+');

Route::get('/jello', function() {
    return response('<h1>Hey Dude!</h1>', 200);
});

// 2. 'variableOrObject': description.
Route::get('/posters/{num}', function($num) {
    return response(htmlspecialchars('Post: ' . $num));
})->where('num', 6);
// 4. 'search Query': access values from a query string.
Route::get('/search', function(Request $request) {
    // dd($request->inputName . ' ' . $request->suburb);
    return htmlspecialchars($request->inputName . ' lives in good old ' . $request->suburb);
});