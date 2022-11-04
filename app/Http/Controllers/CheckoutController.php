<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Mail\OrderMail;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function index()
    {
        $cartitems = Cart::where('user_id', Auth::id())->get();
        return view('checkout', compact('cartitems'));
    }





    public function placeorder(Request $request)
    {
        $order = new Order();
        $order->user_id = Auth::id();
        $order->fname = $request->input('fname');
        $order->lname = $request->input('lname');
        $order->email = $request->input('email');
        $order->telefon = $request->input('telefon');
        $order->adresa = $request->input('adresa');
        $order->oras = $request->input('oras');
        $order->judet = $request->input('judet');
        $order->codpostal = $request->input('codpostal');
        $order->payment_mode = $request->input('payment_mode');
        $order->tracking_no = 'calin'.rand(1111,9999);
        $order->save();

        $order->id;
        $cartitems = Cart::where('user_id', Auth::id())->get();
      

        foreach($cartitems as $item)
        {
            OrderItem::create([
                    'order_id'=> $order->id,
                    'prod_id'=> $item->prod_id,
                    'prod_quantity'=> $item->prod_quantity,
                    'price'=> $item->products->selling_price,
            ]);

                $prod = Product::where('id', $item->prod_id)->first();
                $prod->quantity = $prod->quantity -  $item->prod_quantity;
                $prod->update();
        }
        Mail::to($order->email)->send(new OrderMail($order));

        if(Auth::user()->adresa == NULL)
        {
            $user = User::where('id', Auth::id())->first();
            $user->name = $request->input('fname');
            $user->lname = $request->input('lname');
            $user->telefon = $request->input('telefon');
            $user->adresa = $request->input('adresa');
            $user->oras = $request->input('oras');
            $user->judet = $request->input('judet');
            $user->codpostal = $request->input('codpostal');
            $user->update();
        }
       
        $cartitems = Cart::where('user_id', Auth::id())->get();
        Cart::destroy($cartitems);
       
        return redirect('/')->with('message', 'Comanda plasata cu succes veti primi un email de confirmare a comenzii.');

       
    }


   

}

