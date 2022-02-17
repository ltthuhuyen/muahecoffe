<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\TypeProduct;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;


class CartController extends Controller
{
    public function show()
    {
        $type_products = TypeProduct::all();
        return view('guest.cart.show', compact('type_products'));
    }
    
    public function add(Request $request){
        // Cart::destroy();
        $type_products = TypeProduct::all();
        $product = Product::findOrFail($request->product_id);

        Cart::add($product->id, $product, 1, $product->currentPrice->price);
        // return Cart::content();
        return view('guest.cart.show',compact('type_products'));
    }
    
    public function delete(Request $request)
    {
        Cart::remove($request->row_id);

        return redirect()->route('guest.cart.show');
    }


    public function increase(Request $request)
    {
        $current_qty = Cart::get($request->row_id)->qty;

        Cart::update($request->row_id, $current_qty+1);

        return view('guest.cart.show');
    }

    public function decrease(Request $request)
    {
        $current_qty = Cart::get($request->row_id)->qty;

        Cart::update($request->row_id, $current_qty-1);

        return view('guest.cart.show');
    }
}
