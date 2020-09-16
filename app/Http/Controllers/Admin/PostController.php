<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Posts\Create;
use App\Http\Requests\Posts\Update;
use App\Models\NewsCategory;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $news = Post::all();
        return view('admin.news.index', compact('news'));
    }




    public function showCreateForm()
    {
        return view('admin.news.create');
    }

    public function create(Create $request)
    {
        $validated = $request->validated();
        $news = new Post();
        // dd($validated);
        $news->createFromRequest($validated);
        if($request->input('type') == 'video')
        {
            $news->type = 'video';
        }elseif($request->input('type') == 'audio')
        {
            $news->type = 'audio';
        }else{
            $news->type = 'simple';
        }
        if($request->input('slider'))
        {
            $news->slider = '1';
        }
        $news->save();

        return redirect()->back();
    }

    public function showUpdateForm(int $id)
    {
        $entry = Post::where('id', $id)->firstOrFail();
        return view('admin.news.update', compact('entry'));
    }

    public function update(Update $request, int $id)
    {
        $validated = $request->validated();
        $news = Post::where('id',$id)->firstOrFail();
        if (!empty($validated['img'])) {
            if($news->img){
            $image_path = public_path() . '/images/' . $news->img;
            unlink($image_path);
        }
        }
        // dd($validated);
        if (!empty($validated['audio'])) {
            if($news->audio)
            {
            $audio_path = public_path() . '/ses/' . $news->audio;
            unlink($audio_path);
            }
        }
        $news->createFromRequest($validated);
        if($request->input('type') == 'video')
        {
            if($news->audio)
            {
            $audio_path = public_path() . '/ses/' . $news->audio;
            unlink($audio_path);
            }
            $news->type = 'video';
            $news->audio = null;
        }elseif($request->input('type') == 'audio')
        {
            $news->type = 'audio';
            $news->video = null;

        }else{
            if($news->audio)
            {
            $audio_path = public_path() . '/ses/' . $news->audio;
            unlink($audio_path);
            }
            $news->video = null;
            $news->audio = null;
            $news->type = 'simple';
        }
        // dd($request);
        if($request->input('slider'))
        {
            $news->slider = '1';
        }
        else
        {
            $news->slider = '0';
        }
        // dd($validated);
        $news->update();

        return redirect()->back();
    }


        public function delete(int $id)
    {
        NewsCategory::where('post_id', $id)->delete();
        $post = Post::where('id', $id)->firstOrFail();
        $image_path = public_path().'/images/'.$post->img;
        unlink($image_path);
        $post->delete();
        return redirect()->back()
            ->with('mesajx', ('Uğurla silindi'))
            ->with('mesaj_tip', 'warning');
    }


    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('images'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/' . $fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }

    }
}
