<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(){
        $product = Product::all();
        
        return view('layouts.index')->with('product', $product);
    }

    public function cart(){
        return view('layouts.cart');
    }

    public function addCart($id){
        
        $product = Product::find($id);
 
        if(!$product) {
 
            abort(404);
 
        }
 
        $cart = session()->get('layouts.cart');
 
        // if cart is empty then this the first product
        if(!$cart) {
 
            $cart = [
                    $id => [
                        "name" => $product->name,
                        "quantity" => 1,
                        "description" => $product->description,
                        "price" => $product->price,
                        "image" => $product->image
                    ]
            ];
 
            session()->put('layouts.cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
 
            $cart[$id]['quantity']++;
 
            session()->put('layouts.cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
 
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "description" => $product->description,
            "price" => $product->price,
            "image" => $product->image
        ];
 
        session()->put('layouts.cart', $cart);
 
        return redirect()->back()->with('success', 'Product added to cart successfully!');

    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('layouts.cart');
 
            $cart[$request->id]["quantity"] = $request->quantity;
 
            session()->put('layouts.cart', $cart);
 
            session()->flash('success', 'Cart updated successfully');
        }
    }
 
    public function remove(Request $request)
    {
        if($request->id) {
 
            $cart = session()->get('layouts.cart');
 
            if(isset($cart[$request->id])) {
 
                unset($cart[$request->id]);
 
                session()->put('layouts.cart', $cart);
            }
 
            session()->flash('success', 'Product removed successfully');
        }
    }
}
