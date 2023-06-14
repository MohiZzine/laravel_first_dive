<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Models\Listing;
use App\Http\Controllers\ListingController;
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

// Naming conventions for routes:
    // index - show all 
    // show - show single
    // create - show create form
    // store - save new record
    // edit - show edit form
    // update - save updated record
    // destroy - delete record

// All Listings
Route::get('/', [ListingController::class, 'index']);

// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']);

// Store Listing Data
Route::post('/listings', [ListingController::class, 'store']);

// Single Listing 
Route::get('listings/{listing}', [ListingController::class, 'show']);

