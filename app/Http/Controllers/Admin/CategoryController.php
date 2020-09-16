<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\Create;
use App\Http\Requests\Category\Update;
use App\Models\Category;

use App\Models\NewsCategory;
use App\Models\NewsComment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categorys = Category::all();

        return view('admin.category.index', compact('categorys'));
    }

    public function showCreateForm()
    {
        return view('admin.category.create');
    }

    public function create(Create $request)
    {
        $validated = $request->validated();
        $category = new Category();
        $category->createFromRequest($validated);
        $category->save();
        return redirect()->back();
    }

    public function showUpdateForm(int $id)
    {
        $entry = Category::where('id', $id)->firstOrFail();
        return view('admin.category.update', compact('entry'));
    }

    public function update(Update $request, int $id)
    {
        $validated = $request->validated();
        $category = Category::where('id',$id)->firstOrFail();
        if (!empty($validated['img'])) {
            $image_path = public_path().'/images/category/'.$category->img;
            unlink($image_path);
        }
        $category->createFromRequest($validated);
        $category->update();
        return redirect()->back();
    }
    public function delete(int $id)
    {
        NewsCategory::where('cat_id', $id)->delete();
        $category = Category::where('id', $id)->first();
        $image_path = public_path().'/images/category/'.$category->img;
        unlink($image_path);
        $category->delete();
        return redirect()->back()
            ->with('mesajx', ('Uğurla silindi'))
            ->with('mesaj_tip', 'warning');
    }
}
