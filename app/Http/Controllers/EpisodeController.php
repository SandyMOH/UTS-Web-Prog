<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\episode;
use App\Models\movie;

class EpisodeController extends Controller
{
    function addData(Request $req){
        $episode= new episode;
        $episode->episode_id=$req->episode_id;
        $episode->episode_num=$req->episode_num;
        $episode->episode_name=$req->episode_name;
        $episode->save();
    }

    function showData(){
        $episode= episode::where('episode_id', '=' , '1')->get(); 
        $movie= movie::where('id', '=' , '1')->get(); 
        return view('episode')->with(['movie'=>$movie])->with(['episode'=>$episode]);
    }

    
}
