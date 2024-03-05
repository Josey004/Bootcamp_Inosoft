<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\ItemController;
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

Route::get('/book', 'App\Http\Controllers\BooksController@index');

// // Route::get('/user/{id}', [UserController::class, 'show']); CONTOHH
Route::get('/book', [BooksController::class, 'index']);

// Route::resource('photos', PhotoController::class);
Route::resources([
    'photos' => PhotoController::class,
    'book' => BooksController::class
]);

Route::get('/book', [BookController::class, 'index']);

//ini lanjutan
Route::get('/item', [ItemController::class, 'index'])->name('item');
Route::post('/item/post', [ItemController::class, 'store']);
Route::get('/item/form', [ItemController::class, 'view']);
