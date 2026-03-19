<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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
Route::get('/vanquang',function(){
    return view('VanQuang');
});


use App\Http\Controllers\MovieController;

Route::get('/the-loai', [MovieController::class, 'listGenres']);

Route::get('/top-10-phim', [MovieController::class, 'topMovies']);

Route::get('/phim-hanh-dong', [MovieController::class, 'getActionMovies']);

Route::get('/phim-pho-bien', [MovieController::class, 'getPopularMovies']);

