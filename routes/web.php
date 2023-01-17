<?php

use Illuminate\Http\Request;
use Illuminate\View\ViewName;
use Illuminate\Support\Facades\Route;
use App\Models\Crust;

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

// 1. 'Route::get': will return all crusts.
Route::get('/', function() {
    return view('crusts', [
        'heading1' => 'Latest Crusts', 
        'heading2' => 'crusts',
        'crusts' => Crust::all()
    ]);
});

// 2. 'Route::get': passes an end point and a function that returns a view.
Route::get('/crust/{crustId}', function ($crustId) {
    return view('crust', [
        'heading1' => 'Result',
        'heading2' => 'Your Crust',
        'crust' => Crust::find($crustId)
    ]);
});