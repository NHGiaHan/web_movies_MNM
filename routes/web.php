<?php

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
Route::get('/vanquang',function(){
    return view('VanQuang');
});


Route::get("/giahan","App\Http\Controllers\TenController@ten");

// Bài 7.3: Top 10 doanh thu cao nhất
Route::get('/top-budget', 'App\Http\Controllers\MovieController@getTopBudget');

// Bài 7.4: Phim dài hơn 120 phút
Route::get('/long-movies', 'App\Http\Controllers\MovieController@getLongMovies');

