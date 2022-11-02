<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodsController extends Controller
{
    public function index()
    {
        $foods = Food::all(); // SELECT * FROM foods
        // $foods = Food::where('name', '=', 'sushi') -> firstOrFail(); // filter
        // dd($foods);
        return view('foods.index', [
            'foods' => $foods
        ]);
    }

    public function create() {
        // insert new food
        return view('foods.create');
    }

    public function store( Request $request) {
        // dd('this is store function');
        $food = new Food();
        $food -> name = $request -> input('name');
        $food -> count = $request -> input('count');
        $food -> description = $request -> input('description');

        $food -> save();
        return redirect('/foods');

    }
}
