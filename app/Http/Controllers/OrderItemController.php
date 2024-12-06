<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $orderItems = OrderItem::all();
        return view('order_items.index', compact('orderItems'));
    }

    public function create()
    {
        return view('order_items.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required',
            'product_id' => 'required',
            'quantity' => 'required|numeric|min:1',
            'price' => 'required|numeric',
        ]);

        $product = Product::find($request->product_id);
        if ($product && $product->stok >= $request->quantity) {

            OrderItem::create($request->all());

            $product->reduceStok($request->quantity);

            return redirect()->route('order_items.index')
                ->with('success', 'Order item created successfully.');
        } else {
            return redirect()->back()->with('error', 'Stok produk tidak mencukupi.');
        }
    }

    public function show(OrderItem $orderItem)
    {
        return view('order_items.show', compact('orderItem'));
    }

    public function edit(OrderItem $orderItem)
    {
        return view('order_items.edit', compact('orderItem'));
    }

    public function update(Request $request, OrderItem $orderItem)
    {
        $request->validate([
            'order_id' => 'required',
            'product_id' => 'required',
            'quantity' => 'required|numeric|min:1',
            'price' => 'required|numeric',
        ]);

        $oldQuantity = $orderItem->quantity;
        $product = Product::find($orderItem->product_id);

        if ($product) {
            $product->increaseStok($oldQuantity);
        }

        $orderItem->update($request->all());

        if ($product && $product->stok >= $request->quantity) {
            $product->reduceStok($request->quantity);
        } else {
            return redirect()->back()->with('error', 'Stok produk tidak mencukupi.');
        }

        return redirect()->route('order_items.index')
            ->with('success', 'Order item updated successfully.');
    }

    public function destroy(OrderItem $orderItem)
    {
        $product = Product::find($orderItem->product_id);
        if ($product) {
            $product->increaseStok($orderItem->quantity);
        }

        $orderItem->delete();

        return redirect()->route('order_items.index')
            ->with('success', 'Order item deleted successfully.');
    }
}
