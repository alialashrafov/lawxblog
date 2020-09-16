<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\NewsCategory;
use App\Models\Post;
use Illuminate\Http\Request;

class AudioController extends Controller
{
   public function audio()
   {
       $audios = Post::where('type', 'audio')->orderBy('id','DESC')->paginate(3);
       return view('audio', compact('audios'));
   }

   public function audiosingle($aslug)
    {
        $categories = Category::all();
        $audio = Post::where('type', 'audio')->where('slug', $aslug)->firstOrFail();
        $checking = $audio->categories->whenEmpty(function ($collection) {
            return null;
        });
        if($checking != null)
        {
            foreach($audio->categories as $cat)
            {
                $data[] = $cat->id;
            }
            $xas = NewsCategory::whereIn('cat_id', $data)
            ->where('post_id', '!=', $audio->id)
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
            $next = Post::whereIN('id', $aqa)->orderBy('id','DESC')->where('id', '>', $audio->id)->first();
            $previous = Post::whereIN('id', $aqa)->orderBy('id','DESC')->where('id', '<', $audio->id)->first();
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
        return view('audio-single',compact('audio','categories','next','previous','relateds'));
    }
}
