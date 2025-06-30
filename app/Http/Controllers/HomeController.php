<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direction;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $directions = Direction::all();
        $totalDirections = $directions->count();
        $totalProducts = Product::count();

        return view('index', compact('directions', 'totalDirections', 'totalProducts'));
    }

    public function direction($symbol_code)
    {
        $direction = Direction::where('symbol_code', $symbol_code)->firstOrFail();
        $productsRaw = $direction->products;
        $products = $productsRaw->where('is_available', true);

        return view('directions', compact('direction', 'products'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Product::create($validated);

        return redirect()->back()->with('success', 'Product added!');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->back()->with('success', 'Product deleted!');
    }
}
