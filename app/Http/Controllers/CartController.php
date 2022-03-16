<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{

    public function index(){
        return view('cart');
    }

    public function store(Request $request){
        $product = Product::findOrFail($request->input('prod_id'));
        Cart::add(
            $product->id,
            $product->name,
            $request->input('qty'),
            $product->price,
        );

        return back()->with('success', 'Product added to cart successfully');
    }


    public function delete($rowId){
        Cart::remove($rowId);
        return redirect('cart');
    }
}
