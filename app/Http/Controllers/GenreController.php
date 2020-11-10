<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\genre;

class GenreController extends Controller
{
    function addData(Request $req){
            $genre= new genre;
            $genre->genre_name=$req->genre_name;
            $genre->save();
    }
}
