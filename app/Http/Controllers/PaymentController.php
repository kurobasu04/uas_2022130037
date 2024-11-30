<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderItem;

class PaymentController extends Controller
{
    public function process(Request $request)
    {
        $cartItems = session()->get('cart', []);
        $total = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $cartItems));

        $order = new Order();
        $order->user_id = Auth::id();
        $order->total_price = $total;
        $order->status = 'completed';
        $order->save();

        foreach ($cartItems as $item) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $item['id'];
            $orderItem->quantity = $item['quantity'];
            $orderItem->price = $item['price'];
            $orderItem->save();
        }

        session()->forget('cart');

        return view('payment.complete', compact('cartItems', 'total'));
    }
}
