<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function getPopularMovies()
    {
        // Truy vấn phim có điểm > 8.0 và lượt bình chọn > 10000
        $movies = DB::table('movie')
            ->where('vote_average', '>', 8.0)
            ->where('vote_count', '>', 10000)
            ->get();

        return view('phim_77', compact('movies'));
    }
}