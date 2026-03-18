<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/the-loai', function () {
    $genres = DB::table('genre')->get(); 
    // Phải là qlsach (tên thư mục) chấm (.) the_loai (tên file có gạch dưới)
    return view('qlsach.the_loai', compact('genres')); 
});
Route::get('/vanquang',function(){
    return 'VanQuang';
});
Route::get('/phim-diem-cao', function () {
    $movies = DB::table('movie')
                ->orderBy('vote_average', 'desc')
                ->limit(10)
                ->get();
    return view('top_phim', compact('movies'));
});


Route::get("/giahan","App\Http\Controllers\TenController@ten");

