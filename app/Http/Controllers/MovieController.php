<?php

namespace App\Http\Controllers;
use App\Models\movie;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    function addData(Request $req){
        $movie= new movie;
        $movie->genres_id=$req->genres_id;
        $movie->movie_title=$req->movie_title;
        $movie->movie_image=$req->movie_image;
        $movie->movie_description=$req->movie_description;
        $movie->rating=$req->rating;
        $movie->save(); 
    }

    function showData(){
        $movie1= movie::where('genres_id', '=' , '1')->get(); 
        $movie2= movie::where('genres_id', '=' , '2')->get(); 
        $movie3= movie::where('genres_id', '=' , '3')->get(); 
        return view('home')->with(['movie1'=>$movie1])->with(['movie2'=>$movie2])->with(['movie3'=>$movie3]);
    }
    function showData1(){
        $movie1= movie::where('genres_id', '=' , '1')->get(); 
       
        return view('genre')->with(['movie1'=>$movie1]);
    }

}
