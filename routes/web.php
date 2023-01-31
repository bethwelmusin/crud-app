<?php

// use Illuminate\Http\Request;

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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


Route::get('/', [ListingController::class, 'index']  );



//single routing
/* Route::get('/listings/{id}', function ($id) {
    $listing = Listing::find($id);
    return view('listing', compact('listing'));
}); */
Route::get('/listings/{id}', [ListingController::class, 'show']);


// Route::get('/search', function(Request $request){
// return ($request);
    
// });