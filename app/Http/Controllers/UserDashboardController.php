<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;

class UserDashboardController extends Controller
{
    public function index()
    {
        return view('user.dashboard', [
            'totalKategori' => Category::count(),
            'totalBarang'   => Product::count(),
            'totalSupplier' => Supplier::count(),
        ]);
    }
}
