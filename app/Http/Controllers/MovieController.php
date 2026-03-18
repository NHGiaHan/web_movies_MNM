<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    // Bài 7.3: Top 10 doanh thu cao nhất
    public function getTopBudget() {
        $movies = DB::table('movie')
                    ->orderBy('budget', 'desc')
                    ->limit(10)
                    ->get();
                    
        return view('movies_list', [
            'movies' => $movies, 
            'title' => '10 Bộ Phim Có Doanh Thu (Budget) Cao Nhất'
        ]);
    }

    // Bài 7.4: Phim thời lượng > 120 phút
    public function getLongMovies() {
        $movies = DB::table('movie')
                    ->where('runtime', '>', 120)
                    ->limit(10) // Lấy 10 bộ theo yêu cầu 7.4
                    ->get();
                    
        return view('movies_list', [
            'movies' => $movies, 
            'title' => '10 Bộ Phim Có Thời Lượng (Runtime) > 120 Phút'
        ]);
    }
}