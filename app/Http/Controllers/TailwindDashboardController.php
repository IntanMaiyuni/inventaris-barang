<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;

class TailwindDashboardController extends Controller
{
    public function index()
    {
        return view('tailwind.dashboard', [
            'totalProducts'   => Product::count(),
            'totalCategories' => Category::count(),
            'totalSuppliers'  => Supplier::count(),
            'lowStock'        => Product::where('stock', '<=', 5)->count(),
        ]);
    }
}
