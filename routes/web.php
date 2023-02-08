<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherController;

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

Route::get('/', [BookController::class, 'index']);
Route::get('/book/{book:title}', [BookController::class, 'show']);

Route::get('/category/{category:name}', [CategoryController::class, 'show']);

Route::get('/publisher', [PublisherController::class, 'index']);
Route::get('/publisher/{publisher:name}', [PublisherController::class, 'show']);

Route::get('/contact', function () {
    return view('pages.contact.contact');
});
