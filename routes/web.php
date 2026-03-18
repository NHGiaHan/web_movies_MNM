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

Route::get('/form','App\Http\Controllers\TuoiController@form');
Route::post('/tinhTuoi','App\Http\Controllers\TuoiController@tinhTuoi');

Route::get("/qlsach/theloai","App\Http\Controllers\BookController@laythongtintheloai");
Route::get("/qlsach/thongtinsach","App\Http\Controllers\BookController@laythongtinsach");
Route::get("/qlsach/dieukien1","App\Http\Controllers\BookController@dieukiengiaban");

Route::get("/qlsach/them","App\Http\Controllers\BookController@themdulieu");
Route::get("/qlsach/sua","App\Http\Controllers\BookController@suadulieu");
Route::get("/qlsach/xoa","App\Http\Controllers\BookController@xoadulieu");

