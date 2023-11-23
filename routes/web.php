<?php

use App\Http\Controllers\RelocationController;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/relocation', function () {
    return view('relocation');
})->name('relocation.dashboard');
Route::get('/about', function () {
    return view('about');
})->name('about.dashboard');
Route::get('/quotes', function () {
    return view('quotes');
})->name('quotes.show');
Route::get('/contact', function () {
    return view('contact');
})->name('contact.dashboard');
Route::get('/index', function () {
    return view('index');
})->name('index.dashboard');


Route::post('relocate-move', [RelocationController::class, 'relocate'])->name('relocate-move');
