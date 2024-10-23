<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MovieController extends Controller
{
    public function topRated()
    {
        // $movies = DB::select('SELECT * FROM movies ORDER BY rating DESC LIMIT 50');
        // $movies = Movie::orderBy('rating')->limit(20)->get();

        // Fetch the top-rated movies with at least 10,000 votes
        $movies = Movie::orderBy('name')
            ->where('votes_nr', '>=', 10000)
            ->limit(20)
            ->get();

        // Fetch a specific person by their ID (example: id 123)
        $person = Person::where('id', 123)->first();

        // Pass both movies and person to the view
        return view('movies.top-rated', compact('movies', 'person'));
    }
}
