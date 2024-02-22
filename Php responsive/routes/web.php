<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OffersController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('index', function () {
    return view('index');
})->name('index');

Route::get('/offers', function () {
    return view('offers');
})->name('offers');

Route::get('/newad', function () {
    return view('newad');
})->name('newad');


Route::get('/offers', [OffersController::class, 'index']);
