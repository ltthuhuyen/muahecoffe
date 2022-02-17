<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return view('employee.orders.list', compact('orders'));
    }

    public function confirm(Order $order)
    {
        $order->update([
            'emp_id' => Auth::id()
        ]);

        return redirect()->route('employee.orders.index');
    }
    public function show(Order $order)
    { 
        // $order = Order::findOrFail($id);
        // $orderitem = OrderItem::all();
        return view ('employee.orders.show' , compact('order'));
    }

}
