<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesControllers extends Controller
{
    public function index(){

        $movies = Movie::all();
        // dd($movies);laravel-model-controller
        return view('index',compact('movies'));
    }
}
