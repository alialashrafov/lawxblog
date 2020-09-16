<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\NewsCategory;
use App\Models\Post;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function video()
    {
        $videos = Post::where('type', 'video')->orderBy('id','DESC')->paginate(3);
        return view('video', compact('videos'));
    }
    public function videosingle($vslug)
    {
        $categories = Category::all();
        $video = Post::where('type', 'video')->where('slug', $vslug)->firstOrFail();
        $checking = $video->categories->whenEmpty(function ($collection) {
            return null;
        });
        if($checking != null)
        {
            foreach($video->categories as $cat)
            {
                $data[] = $cat->id;
            }
            $xas = NewsCategory::whereIn('cat_id', $data)
            ->where('post_id', '!=', $video->id)
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
            $next = Post::whereIN('id', $aqa)->orderBy('id','DESC')->where('id', '>', $video->id)->first();
            $previous = Post::whereIN('id', $aqa)->orderBy('id','DESC')->where('id', '<', $video->id)->first();
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
        return view('video-single',compact('video','categories','next','previous','relateds'));
    }
}
