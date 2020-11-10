<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\EpisodeController;




Route::get('/',[MovieController::class,'ShowData']);
Route::get('/genre', [MovieController::class,'ShowData1']);
Route::get('/episode', [EpisodeController::class,'ShowData']);


Route::view('addgenre', 'inesrtGenres');
Route::post('addgenre',[GenreController::class,'addData']);

Route::view('addmovie', 'insertMovie');
Route::post('addmovie',[MovieController::class,'addData']);

Route::view('addepisode', 'insertEpisode');
Route::post('addepisode',[EpisodeController::class,'addData']);