<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function getCanadaMovies()
    {
        $movies = DB::table('movie')
                    ->where('country_name', 'Canada')
                    ->get();

        return view('movies.canada', compact('movies'));
    }
}
