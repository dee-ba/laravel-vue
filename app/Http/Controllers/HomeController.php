<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }


    public function images (Request $request) 
    {
        // dd ($request->surprise());
        // dd ($request->all());
        return response()->json ([
            'images' => [
                'images/coffee.jpg',
                'images/coffee2.jpg',
                'images/berries.jpg',
            ],

            'food_of_the_day' => 'Salad',
    
        ]);
    }
}
