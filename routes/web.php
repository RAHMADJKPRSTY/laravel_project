<?php

use App\Http\Controllers\LatihanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::resource('post', PostController::class);
Route::resource('category', CategoryController::class);


Route::get('/latihan', [LatihanController::class, 'showMyname']);

// Route::get('/post', [PostController::class, 'index']);
// Route::post('/post', [PostController::class, 'store']);
