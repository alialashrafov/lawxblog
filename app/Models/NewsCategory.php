<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $table = "news_category";
    protected $guarded = [''];

    public function posts()
    {
        return $this->hasOne(Post::class,'id','post_id');
    }
    public function categorys()
    {
        return $this->hasOne(Category::class,'id','cat_id');
    }

}
