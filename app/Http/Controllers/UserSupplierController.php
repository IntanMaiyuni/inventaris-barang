<?php

namespace App\Http\Controllers;

use App\Models\Supplier;

class UserSupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::latest()->paginate(8); // ⬅ pagination
        return view('user.suppliers', compact('suppliers'));
    }
}
