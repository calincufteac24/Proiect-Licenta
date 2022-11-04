<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    /**
 * Write code on Method
 *
 * @return response()
 */
public function viewcategory($slug)
{
    if(Category::where('slug', $slug)->exists())
    {
        $category = Category::where('slug', $slug)->first();
        $products = Product::where('category_id', $category->id)->get();
        return view('products', compact('category','products'));
    }
    else{
        return redirect('/')->with('status',"Slug nu exista");
    }

    // $products = Product::where()

}





 public function index()
 {
 $products = Product::all();
 return view('welcome', compact('products'));
 }

 
 public function discount(Request $request)
 {
$products = Product::all();
$categories = Category::all();
if($request->get('sort') == 'price_asc')
{
    $products = Product::orderBy('selling_price', 'asc')->get();
}elseif($request->get('sort') == 'price_desc')
{
    $products = Product::orderBy('selling_price', 'desc')->get();
}elseif($request->get('filterbrand')){
    $checked = $_GET['filterbrand'];
    $products = Product::whereIn('category_id', $checked)->get();
}
return view('discount', compact('products', 'categories'));
 
 }




}