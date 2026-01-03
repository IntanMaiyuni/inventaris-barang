<?php

namespace App\Http\Controllers;

use App\Models\Product;

class UserProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')
            ->latest()
            ->paginate(8);

        return view('user.products', compact('products'));
    }
}
