<?php

use App\Http\Controllers\BooksController;
// use App\Models\books;
// use Faker\Provider\Lorem;
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

Route::get('/', [BooksController::class, 'showAll']);

Route::get('/detail/{id}', [BooksController::class, 'showDetail']);

Route::get('/category/{id}', [BooksController::class, 'showCategory']);

Route::get('/publisher', [BooksController::class, 'showPublisher']);

Route::get('/publisher/detail/{id}', [BooksController::class, 'showPublisherDetail']);

Route::get('/contact', [BooksController::class, 'showContact']);
