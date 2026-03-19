<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    //7.1
    public function listGenres() 
    {
        $genres = DB::table('genre')->get(); 
        
        return view('phim_71', ['genres' => $genres]);
    }

    //7.2
    public function topMovies() 
    {
        $movies = DB::table('movie')
            ->orderBy('vote_average', 'desc')
            ->limit(10)
            ->get();

        return view('phim_72', ['movies' => $movies]);
    }

    //7.3
    public function getActionMovies() 
    {
        $movies = DB::table('movie')
            ->join('movie_genre', 'movie.id', '=', 'movie_genre.id_movie') 
            ->join('genre', 'movie_genre.id_genre', '=', 'genre.id') 
            ->where('genre.genre_name', 'Action')
            ->select('movie.movie_name', 'movie.release_date', 'movie.overview', 'movie.image_link')
            ->get();

        return view('phim_76', ['movies' => $movies]);
    }

    //7.3
    public function getPopularMovies()
    {
        $movies = DB::table('movie')
            ->where('vote_average', '>', 8.0)
            ->where('vote_count', '>', 10000)
            ->get();

        return view('phim_77', compact('movies'));
    }
}