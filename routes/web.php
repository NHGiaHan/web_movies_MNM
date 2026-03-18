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
    return 'VanQuang';
});


Route::get("/giahan","App\Http\Controllers\TenController@ten");
Route::get("/kimngan","App\Http\Controllers\TenController@ten2");

Route::get("/tranchau","App\Http\Controllers\TenController@ten1");

// Bài 7.3: Top 10 doanh thu cao nhất
Route::get('/top-budget', 'App\Http\Controllers\MovieController@getTopBudget');

// Bài 7.4: Phim dài hơn 120 phút
Route::get('/long-movies', 'App\Http\Controllers\MovieController@getLongMovies');


