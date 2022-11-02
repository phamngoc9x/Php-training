<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index() {
        // $posts = DB::select("SELECT * FROM posts;");
        $posts = DB::table("posts")
                -> whereNotNull("body")
                -> get();
        dd($posts);
        // return view('posts.index')-> with('posts', $posts);
    }
}
