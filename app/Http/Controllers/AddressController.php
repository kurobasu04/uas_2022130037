<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $addresses = Address::all();
        return view('addresses.index', compact('addresses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addresses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'address_line1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postal_code' => 'required',
        ]);

        Address::create($request->all());
        return redirect()->route('addresses.index')->with('success', 'Address created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Address $address)
    {
        return view('addresses.show', compact('address'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Address $address)
    {
        return view('addresses.edit', compact('address'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Address $address)
    {
        $request->validate([
            'user_id' => 'required',
            'address_line1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postal_code' => 'required',
        ]);

        $address->update($request->all());
        return redirect()->route('addresses.index')->with('success', 'Address updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address)
    {
        $address->delete();
        return redirect()->route('addresses.index')->with('success', 'Address deleted successfully.');
    }
}
