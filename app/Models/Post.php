<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Post extends Model
{
    public $table = 'posts';
    protected $guarded = [''];

    public function createFromRequest(array $validated)
    {
        $this->assignFields($validated);

        $this->uploadFile($validated);
    }

    private function assignFields($validated)
    {
        $this->author = $validated['author'];
        $this->title = $validated['title'];
        $this->slug = Str::slug($validated["title"]);
        $this->short_description = $validated['short_description'];
        $this->video = $validated['video'];
        $this->description = $validated['description'];
    }

    private function uploadFile($validated)
    {
        if (!empty($validated['img'])) {
            $img = $validated['img'];
            $img_name = md5(time()) . '_' . Str::random(8) . "." . $img->getClientOriginalExtension();
            $img->move(public_path('images'), $img_name);
            $this->img = $img_name;
        }
        if (!empty($validated['audio'])) {
            $audio = $validated['audio'];
            $audio_name = md5(time()) . '_' . Str::random(8) . "." . $audio->getClientOriginalExtension();
            $audio->move(public_path('ses'), $audio_name);
            $this->audio = $audio_name;
        }

    }



    public function categories()
    {
        return $this->belongsToMany(Category::class, 'news_category','post_id','cat_id');
    }

}
