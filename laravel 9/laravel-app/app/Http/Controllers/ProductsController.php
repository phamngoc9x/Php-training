<?php

namespace App\Http\Controllers;


class ProductsController extends Controller
{
    public function index()
    {
        // return view('products.index', compact('title'));

        $myphone = [
            'name' => 'iphone 14',
            'year' => 2022,
            'isFavorited' => true
        ];
        // return view('products.index') ->with('name', $name);
        // return view('products.index', compact('myphone'));
        // print_r(route('products'));
        return view('products.index');
    }
    public function about()
    {
        return 'this is about page';
    }

    public function detail($productName, $id)
    {

        return "product name =".$productName . "<br>product's id = ".$id;

        // $phones = [
        //     'iphone 15' => 'iphone 15',
        //     'samsung' => 'samsung'
        // ];
        // return view('products.index', [
        //     'products' => $phones[$productName] ?? 'unknown product'
        // ]);
    }
}
