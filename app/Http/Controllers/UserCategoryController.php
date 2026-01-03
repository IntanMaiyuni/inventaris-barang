<?php

namespace App\Http\Controllers;

use App\Models\Category;

class UserCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate(8);
        return view('user.categories', compact('categories'));
    }
}
