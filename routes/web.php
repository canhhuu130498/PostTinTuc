<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Post\PostController;

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
Route::get('/post/news/create',[PostController ::class,'create']);
Route::post('/post/news/store',[PostController::class, 'store']);
Route::get('/post/news/store',[PostController::class, 'store']);
Route::get('/post/news', [PostController::class, 'index']);
Route::get('/post/news/{id}', [PostController::class, 'show']);
