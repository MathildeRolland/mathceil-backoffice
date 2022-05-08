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

    public function update($id)
    {
        $categoryToUpdate = Category::findOrFail($id);

        return view('updateCategory', ['category' => $categoryToUpdate]);
    }

    public function edit(Request $request)
    {
        $categoryToUpdate = Category::whereId($request->id)->first();

        $categoryToUpdate->update([
            'name' => $request->name,
        ]);

        return redirect('/categories');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect('/categories');
    }
}
