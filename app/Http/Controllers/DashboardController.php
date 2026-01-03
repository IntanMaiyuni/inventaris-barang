<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'totalKategori' => Category::count(),
            'totalBarang'   => Product::count(),
            'totalSupplier' => Supplier::count(),
            'stokRendah'    => Product::where('stock', '<=', 5)->count(),
        ]);
    }
}
