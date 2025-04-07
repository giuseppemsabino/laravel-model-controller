<?php

use App\Http\Controllers\MoviesControllers;
use Illuminate\Support\Facades\Route;

Route::get('/', [MoviesControllers::class, 'index']);
