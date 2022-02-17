<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\TypeProduct;
use App\Models\Order;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function show()
    {
        $type_products = TypeProduct::all();
        return view('guest.payment.show',compact('type_products'));
    }

    public function store(Request $request)
    {
       
        $user = User::firstOrCreate(
            ['email' => $request->email],
            [
                'name' => $request->name,
                'phonenumber' => $request->phonenumber,
                'password' => ''
            ]
        );
      
        $order = DB::transaction(function () use ($user) {
            $order = Order::create([
                'emp_id' => null,
                'guest_id' => $user->id,
                'status' => ''
            ]);

            foreach(Cart::content() as $cart_item) {
                $order->items()->create([
                    'price_id' => $cart_item->name->currentPrice->id,
                    'quantity' => $cart_item->qty,
                    'note' =>''
                ]);
                Cart::remove($cart_item->rowId);
            }

            return $order;
        });

        return redirect()->route('guest.cart.show', $order);
    }
}
