<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $table = "categories";
    protected $guarded = [''];

    public function posts()
    {
        return $this->belongsToMany(Post::class,'news_category','cat_id','post_id')->orderBy('id','DESC');
    }

    public function createFromRequest(array $validated)
    {
        $this->assignFields($validated);
        $this->uploadFile($validated);
    }

    public function assignFields($validated)
    {
        $this->sira = $validated['sira'];
        $this->title = $validated['title'];
        $this->description = $validated['description'];
        $this->slug = Str::slug($validated["title"]);

    }

    private function uploadFile($validated)
    {
        if (!empty($validated['img'])) {
            $img = $validated['img'];
            $img_name = md5(time()) . '_' . Str::random(8) . "." . $img->getClientOriginalExtension();
            $img->move(public_path('images/category'), $img_name);
            $this->img = $img_name;
        }
    }

}
