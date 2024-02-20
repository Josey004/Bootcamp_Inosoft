<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PhotoController;
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
    return view('welcome');
});

// Route::get('/book', 'App\Http\Controllers\BookController@index');

// Route::get('/user/{id}', [UserController::class, 'show']); CONTOHH
Route::get('/book', [BookController::class, 'index']);

// Route::resource('photos', PhotoController::class);
Route::resources([
    'photos' => PhotoController::class,
    'book' => BookController::class
]);
