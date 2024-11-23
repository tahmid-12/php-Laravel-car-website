<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){

        // Get all cars
        // $cars = Cars::get();

        // get cars in which published_at is not Null
        // $cars = Cars::where('published_at','!=',null)->get();

        // Select First data
        // $cars = Cars::where('published_at','!=',null)->first();
        // $cars = Cars::first();

        // find with id
        $car = Cars::find(3);

        // dd($car->features, $car->primaryImage);

        return view('Home.index');
    }
}
