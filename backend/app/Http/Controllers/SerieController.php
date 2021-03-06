<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class SerieController extends Controller
{

    private $array = ['error'=>'', 'result'=>[]];

    public function all(Request $request){

        $movies = Movie::where('tv_show', 1)
                        ->orderBy('title', 'desc')
                        ->take(10)
                        ->get();

        foreach($movies as $movie){

            $this->array['result'][] = [
                'id'=>$movie->id,
                'title'=>$movie->title,
                'overview'=>$movie->overview,
                'poster'=>$movie->poster,
                'gender'=>$movie->gender_name,
                'name'=>$movie->name,
            ];
        }

        return $this->array;
    }

    public function trending(Request $request){

        $movies = Movie::where('tv_show', 1)
                        ->where('trending', 1)
                        ->orderBy('title', 'desc')
                        ->take(10)
                        ->get();

        foreach($movies as $movie){

            $this->array['result'][] = [
                'id'=>$movie->id,
                'title'=>$movie->title,
                'overview'=>$movie->overview,
                'poster'=>$movie->poster,
                'gender'=>$movie->gender_name,
                'name'=>$movie->name,
            ];
        }

        return $this->array;
    }

    public function discover(Request $request){

        $movies = Movie::where('tv_show', 1)
                        ->where('discover', 1)
                        ->orderBy('title', 'desc')
                        ->take(10)
                        ->get();

        foreach($movies as $movie){

            $this->array['result'][] = [
                'id'=>$movie->id,
                'title'=>$movie->title,
                'overview'=>$movie->overview,
                'poster'=>$movie->poster,
                'gender'=>$movie->gender_name,
                'name'=>$movie->name,
            ];
        }

        return $this->array;
    }
}
