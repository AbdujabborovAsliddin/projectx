<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direction;
use App\Models\Product;


class ProductController extends Controller
{
    public function store(Request $request, $symbol_code)
    {
        $direction = Direction::where('symbol_code', $symbol_code)->firstOrFail();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'volume' => 'nullable|string|max:50',
            'price' => 'nullable|numeric',
            'amount' => 'nullable|integer',
        ]);

        $validated['direction_id'] = $direction->id;
        $validated['is_available'] = 1;

        Product::create($validated);

        return redirect()->route('directions.show', $symbol_code)
            ->with('success', 'Product created!');
    }

    
    public function destroy($symbol_code, $product_id)
    {
        $direction = Direction::where('symbol_code', $symbol_code)->firstOrFail();

        $product = Product::where('id', $product_id)
            ->where('direction_id', $direction->id)
            ->firstOrFail();

        $product->delete();

        return redirect()->route('directions.show', $symbol_code)
            ->with('success', 'Product deleted!');
    }
}
