<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Direction;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->input('q');
    
        $products = Product::where('name', 'like', '%' . $q . '%')->get();
        $directions = Direction::where('name', 'like', '%' . $q . '%')->get();
    
        return view('results', [
            'query' => $q,
            'products' => $products,
            'directions' => $directions,
        ]);
    }
}
