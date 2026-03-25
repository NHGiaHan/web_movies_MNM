<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;


Route::get('/vanquang',function(){
    return view('VanQuang');
});


Route::get("/giahan","App\Http\Controllers\TenController@ten");

Route::get('/phim-canada', [MovieController::class, 'getCanadaMovies']);