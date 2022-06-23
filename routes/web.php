<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PredictionsController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::resource('/predictions', PredictionsController::class);
// Route::get('/', [PagesController::class, 'index']);
// Route::get('/about', [PagesController::class, 'about']);
// Pattern is integer
// Route::get('/products/{id}', 
// [ProductsController::class, 'show'])->where('id', '[0-9]+');

// Pattern is string
// Route::get('/products/{name}/{id}', 
// [ProductsController::class, 'show'])->where([
//     'name' => '[a-z]+',
//     'id' => '[0-9]+'
// ]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');