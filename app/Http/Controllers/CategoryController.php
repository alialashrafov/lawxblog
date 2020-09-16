<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function allindex()
    {
        $categories = Category::orderBy('sira','ASC')->get();
        return view('categories', compact('categories'));
    }
    public function oneindex($cslug)
    {
        $category = Category::where('slug', $cslug)->first();
        $asa = $category->posts()->paginate(12);
        return view('category', compact('category', 'asa'));
    }

}
