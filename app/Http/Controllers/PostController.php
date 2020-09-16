<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\NewsCategory;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($nslug = null)
    {
        $categories = Category::all();
        $post = Post::where('slug', $nslug)->where('type','simple')->firstOrFail();
        $checking = $post->categories->whenEmpty(function ($collection) {
            return null;
        });
        if($checking != null)
        {
            foreach($post->categories as $cat)
            {
                $data[] = $cat->id;
            }
            $xas = NewsCategory::whereIn('cat_id', $data)
            ->where('post_id', '!=', $post->id)
            ->orderBy('id', 'DESC')->get()->whenEmpty(function ($collection){
                return null;
            });
            if($xas != null)
            {
            foreach ($xas as $xa)
            {
                $datar[] = $xa->post_id;
            }
            $aqa = array_unique($datar);
            $next = Post::whereIN('id', $aqa)->orderBy('id','DESC')->where('id', '>', $post->id)->first();
            $previous = Post::whereIN('id', $aqa)->orderBy('id','DESC')->where('id', '<', $post->id)->first();
            $relateds = Post::whereIn('id', $aqa)->orderBy('id', 'DESC')->take(3)->get();
        }
        else
        {
            $data = null;
            $relateds = null;
            $next = null;
            $previous = null;
        }

        }
        else
        {
            $data = null;
            $relateds = null;
            $next = null;
            $previous = null;
        }
        return view('post', compact('post', 'categories', 'relateds','next','previous'));
    }
}
