<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::paginate(10);
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|numeric',
            'category_id' => 'required',
            'photo' => 'nullable|image|mimes:png,jpg,jpeg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $filename = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('images', $filename, 'public');
            $validated['photo'] = 'images/' . $filename;
        }

        Product::create($validated);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|numeric',
            'category_id' => 'required',
            'photo' => 'nullable|image|mimes:png,jpg,jpeg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            if ($product->photo) {
                Storage::disk('public')->delete(str_replace('public/', '', $product->photo));
            }
            $filename = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('images', $filename, 'public');
            $validated['photo'] = 'images/' . $filename;
        }

        $product->update($validated);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        if ($product->photo) {
            Storage::delete($product->photo);
        }
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }

    public function shop(Request $request)
    {
        $query = Product::query();
        if ($request->has('category') && $request->category != '') {
            $query->where('category_id', $request->category);
        }
        $products = $query->paginate(10);
        $categories = Category::all();
        return view('shop.index', compact('products', 'categories'));
    }
}
