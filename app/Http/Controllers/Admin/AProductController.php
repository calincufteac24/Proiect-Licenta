<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class AProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }
    public function add()
    {
        $category = Category::all();
        return view('admin.product.add', compact('category'));
    }
    public function insert(Request $request)
    {
        $products = new Product();
        $products->category_id = $request->input('category_id');
        $products->name = $request->input('name');
        $products->small_description = $request->input('small_description');
        $products->description = $request->input('description');
        $products->original_price = $request->input('original_price');
        $products->selling_price = $request->input('selling_price');
        $products->image = $request->input('image');
        $products->quantity = $request->input('quantity');
        $products->status = $request->input('status') == TRUE ? '1':'0';
        $products->trending = $request->input('trending') == TRUE ? '1': '0';
        $products->save();
        return redirect('/dashboard/products')->with('status', "Produs adaugata cu succes");

    }
    public function edit($id)
    {
        $products = Product::find($id);
        return view('admin.product.edit', compact('products'));
    }
    public function update(Request $request, $id)
    {
        $products = Product::find($id);
        $products->name = $request->input('name');
        $products->small_description = $request->input('small_description');
        $products->description = $request->input('description');
        $products->original_price = $request->input('original_price');
        $products->selling_price = $request->input('selling_price');
        $products->image = $request->input('image');
        $products->quantity = $request->input('quantity');
        $products->status = $request->input('status') == TRUE ? '1':'0';
        $products->trending = $request->input('trending') == TRUE ? '1': '0';
        $products->update();
        return redirect('/dashboard/products')->with('status', "Produs modificat cu succes");
    }
    public function delete($id)
    {
        $products = Product::find($id);
        $products->delete();
        return redirect('/dashboard/products')->with('status', "Produsul a fost stears cu succes!");
    }
}
