<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $collection = Post::orderBy('id','DESC')->paginate(6);
        $slider = Post::where('slider', '1')->take(3)->get();
        // dd($slider);
        return view('index', compact('collection','slider'));
    }
    public function ajax()
    {
        $collection = Post::orderBy('id','DESC')->paginate(6);
        return view('postitem', compact('collection'));
    }
}
