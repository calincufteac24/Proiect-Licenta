<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function category()
    {
    $categories = Category::all();
    return view('category', compact('categories'));
    }

    public function indexcate()
    {
        $categories = Category::all();
        return view('admin.category.indexcate', compact('categories'));
    }

    public function add()
    {
        return view('admin.category.add');
    }

    public function insert(Request $request)
    {
        $category = new Category();
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->image = $request->input('image');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE ? '1':'0';
        $category->popular = $request->input('popular') == TRUE ? '1':'0';
        $category->save();
        return redirect('/dashboard/category')->with('status', "Categorie adaugata cu succes");
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->image = $request->input('image');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE ? '1':'0';
        $category->popular = $request->input('popular') == TRUE ? '1':'0';
        $category->update();
        return redirect('/dashboard/category')->with('status', "Categorie modificata cu succes!");
    }
    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/dashboard/category')->with('status', "Categoria a fost stearsa cu succes!");
    }
}

