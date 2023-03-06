<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function create() {
        return view('category.create');
    }

    public function getCategoriesJSON()
    {
        $categories = Category::all();
        return response()->json($categories);
    }

    public function store() {
        $attributes = request()->validate([
            'name' => 'required',
            'slug' => 'nullable',
        ]);
        $attributes['slug'] = Str::slug($attributes['name']);

        Category::create($attributes);

        session()->flash('success','Category Created Successfully');

        return redirect('/admin/projects');
    }

    public function edit(Category $category) {
        return view('category.create')
        ->with('category', $category);
    }

    public function update(Category $category, Request $request) {
        $attributes = request()->validate([
            'name' => 'required',
        ]);

        // Generate the slug from the title
        $attributes['slug'] = Str::slug($attributes['name']);
        
        $category -> update($attributes);
        // Set a flash message
        session()->flash('success','Category updated Successfully');

        return redirect('/admin/projects');
    }

    
    public function destroy(Category $category) {
        $category->delete();

        // Set a flash message
        session()->flash('success','Category Deleted Successfully');

        // Redirect to the Admin Dashboard
        return redirect('/admin/projects');
    }
}
