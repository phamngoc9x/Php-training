<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Category;
use App\Rules\Uppercase;

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
        $categories = Category::all();
        return view('foods.create')->with('categories', $categories);
    }

    public function store( Request $request) {
        // dd($request->all());

        // dd($request-> file('image')->guessClientExtension()); //igp, jpeg
        // dd($request-> file('image')->getMimeType()); //igp, jpeg
        // dd($request-> file('image')->getSize()); //igp, jpeg
        // dd($request-> file('image')->getError()); //igp, jpeg

        $request -> validate([
            'name' => 'required',
            'count' => 'required|integer|min:0|max:200',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
            
        ]);

        $generatedImageName = 'image'.time().'-'
            .$request->name.'.'
            .$request->image->extension();

        // dd($generatedImageName);

        $request->image->move(public_path('images'), $generatedImageName);

        // dd('this is store function');
        // $food = new Food();
        // $food -> name = $request -> input('name');
        // $food -> count = $request -> input('count');
        // $food -> description = $request -> input('description');

        // dd($request);
        // $request -> validated();
        // $request -> validate(([
        //     // 'name' => 'required|unique:foods',
        //     'name' => new Uppercase,
        //     'count' => 'required|integer|min:0|max:1000',
        //     'category_id' => 'required'
        // ]));
        $food = Food::create([
            'name' => $request -> input('name'),
            'count' => $request -> input('count'),
            'description' => $request -> input('description'),
            'category_id' => $request -> input('category_id'),
            'image_path' => $generatedImageName
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

        // dd($category);
        return view('foods.show') -> with('food',  $food);
    }

    public function edit($id) {
        // insert new food
        $categories = Category::all();
        $food = Food::find($id);

        // dd($food);
        return view('foods.edit') -> with('food',  $food)->with('categories', $categories);
    }


    public function update(Request $request, $id) {
        // update food
        // $request -> validated();

        $request -> validate([
            'name' => 'required',
            'count' => 'required|integer|min:0|max:200',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
            
        ]);

        $generatedImageName = 'image'.time().'-'
            .$request->name.'.'
            .$request->image->extension();

        $request->image->move(public_path('images'), $generatedImageName);

        $food = Food::where('id', $id)
            ->update([
            'name' => $request -> input('name'),
            'count' => $request -> input('count'),
            'description' => $request -> input('description'),
            'category_id' => $request -> input('category_id'),
            'image_path' => $generatedImageName
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
