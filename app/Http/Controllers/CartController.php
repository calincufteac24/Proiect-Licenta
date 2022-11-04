<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addProduct(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_quantity = $request->input('product_quantity');

        if(Auth::check())
            {
                $prod_check = Product::where('id',$product_id)->first(); 
                if($prod_check)
                {
                    if(Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists())
                    {
                        
                        return response()->json(['status'=> $prod_check->name. "a fost deja adaugat in cos"]);   
                    }
                    else
                    {
                    $cartItem = new Cart();
                    $cartItem->prod_id = $product_id;
                    $cartItem->user_id = Auth::id();
                    $cartItem->prod_quantity= $product_quantity;
                    $cartItem->save();
                    return response()->json(['status'=> $prod_check->name. " a fost adaugat in cos cu succes"]);   
                    }  
                }   
            }
            else
                    {
                    return response()->json(['status'=> "Trebuie sa va logati prima data"]);  
                    }

    }


        public function viewcart()
        {
            $cartitems = Cart::where('user_id', Auth::id())->get();
            return view('cart', compact('cartitems'));
        }

        public function deleteproduct(Request $request)
        {
           
            if(Auth::check())
            {
                $prod_id = $request->input('prod_id');
                if(Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->exists())
                {
                
                    $cartitem = Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->first();
                    $cartitem->delete();
                    return response()->json(['status'=> "Produs este sters."]);
                }
            }
           else
           {
            return response()->json(['status'=> "Trebuie sa va logati prima data."]);
           }
        }

        public function updatecart(Request $request)
        {
            $prod_id = $request->input('prod_id');
            $product_quantity = $request->input('prod_quantity');

            if(Auth::check())
            {
                if(Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->exists())
                {
                    $cart = Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->first();
                    $cart->prod_quantity = $product_quantity;
                    $cart->update();
                    return response()->json(['status'=> "Cantitate modificata"]);
                }
            }
        }

}
