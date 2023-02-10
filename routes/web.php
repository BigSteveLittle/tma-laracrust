<?php

use Illuminate\Http\Request;
use Illuminate\View\ViewName;
use Illuminate\Support\Facades\Route;
use App\Models\CrustListing;

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
    return view('crust-listing', [
        'heading1' => 'Latest  Crusts',
        'crustListing' => CrustListing::all()
    ]);
});

// 2. 'Route::get': will return a single crust listing that matches the '$searchId'.
Route::get('/crusts/{crustId}', function($searchId) {
    return  view('crust', [
        'heading1' => "You're Crust", 
        'crust' => CrustListing::find($searchId)
    ]);
});
