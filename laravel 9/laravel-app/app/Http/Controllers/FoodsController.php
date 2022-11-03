<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Category;

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
        // $food = new Food();
        // $food -> name = $request -> input('name');
        // $food -> count = $request -> input('count');
        // $food -> description = $request -> input('description');
        $food = Food::create([
            'name' => $request -> input('name'),
            'count' => $request -> input('count'),
            'description' => $request -> input('description')
        ]);

        $food -> save();
        return redirect('/foods');
    }

    public function show( $id) {
        // dd('this is show function  id:'.$id);
        $food = Food::find($id);

        $category = Category::find($food -> category_id);

        // dd($category);

        $food->category = $category;

        // dd($food);
        return view('foods.show') -> with('food',  $food);
    }

    public function edit($id) {
        // insert new food
        $food = Food::find($id);

        // dd($food);
        return view('foods.edit') -> with('food',  $food);
    }


    public function update(Request $request, $id) {
        // update food
        $food = Food::where('id', $id)
            ->update([
            'name' => $request -> input('name'),
            'count' => $request -> input('count'),
            'description' => $request -> input('description')
        ]);
        
        return redirect('/foods');
    }
    public function destroy( $id) {
        // update food
        $food = Food::find($id);

        $food->delete();
        // dd($id);
        
        return redirect('/foods');
    }
}
