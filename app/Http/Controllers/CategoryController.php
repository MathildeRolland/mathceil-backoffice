<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function displayCategories()
    {
        $categories = Category::all();

        return view('categories', ['categories' => $categories]);
    }

    public function create()
    {
        return view('createCategory');
    }

    public function store(Request $request)
    {
        Category::create([
            'name' => $request->name,
        ]);

        $categories = Category::all();

        return view('categories', ['categories' => $categories]);
    }
}
