<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {

        $cartItems = session()->get('cart', []);

        $total = array_sum(array_column($cartItems, 'price'));

        return view('cart.index', compact('cartItems', 'total'));
    }

    public function add(Request $request)
    {
        // Logika untuk menambahkan produk ke keranjang
        // Misalnya: session()->push('cart', $productData);
        return redirect()->route('shop.index')->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Produk berhasil dihapus dari keranjang.');
    }
}
