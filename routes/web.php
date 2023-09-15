<?php

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

use App\Http\Controllers\BaseController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', BaseController::class);
Route::get('/products', ProductsController::class);
Route::post('/basket', [BasketController::class, 'store']);
Route::get('/basket', [BasketController::class, 'index']);
