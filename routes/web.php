<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\MovieController;


Route::get('/vanquang', function () {
    return 'VanQuang';
});

Route::get("/giahan", "App\Http\Controllers\TenController@ten");
Route::get("/kimngan", "App\Http\Controllers\TenController@ten2");
Route::get("/tranchau", "App\Http\Controllers\TenController@ten1");

// 7.1 danh sách các thể loại phim
Route::get('/the-loai', [MovieController::class, 'listGenres']);

// 7.2 Top 10 phim có điểm bình chọn cao nhất
Route::get('/top-10-phim', [MovieController::class, 'topMovies']);

// Bài 7.3: Top 10 doanh thu cao nhất
Route::get('/top-budget', 'App\Http\Controllers\MovieController@getTopBudget');

// Bài 7.4: Phim dài hơn 120 phút
Route::get('/long-movies', 'App\Http\Controllers\MovieController@getLongMovies');

// Bài 7.5: Các bộ phim của Canada
Route::get('/phim-canada', 'App\Http\Controllers\MovieController@getCanadaMovies');

// 7.6 danh sách phim có thể loại là Action
Route::get('/phim-hanh-dong', 'App\Http\Controllers\MovieController@getActionMovies');

// 7.7 phim có điểm bình chọn trung bình > 8.0 và số lượt bình chọn > 10000
Route::get('/phim-pho-bien', 'App\Http\Controllers\MovieController@getPopularMovies');


Route::get('/sach','App\Http\Controllers\ViduLayoutController@sach');
Route::get('/sach/theloai/{id}','App\Http\Controllers\ViduLayoutController@theloai');
Route::get('sach/chitiet/{id}','App\Http\Controllers\ViduLayoutController@chitiet');
