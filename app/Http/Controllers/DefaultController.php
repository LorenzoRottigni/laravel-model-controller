<?php

namespace App\Http\Controllers;
use App\Movie;
use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function index(){
        $movies = Movie::all();
        return view("index",[
            "movies" => $movies
        ]);
    }
}
