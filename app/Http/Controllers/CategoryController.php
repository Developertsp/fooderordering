<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Constants\MyConstants;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories,slug',
            'desc' => 'nullable|string',
            'icon_file' => 'nullable|file|image|max:2048', // Adjust max file size as needed
            'background_image' => 'nullable|file|image|max:2048', // Adjust max file size as needed
            'created_by' => 'nullable|numeric|exists:users,id',
            'updated_by' => 'nullable|numeric|exists:users,id',
        ]);

        // Create a new category instance
        $category = new Category();
        $category->name = $validatedData['name'];
        $category->desc = $validatedData['desc'];
        $category->type = MyConstants::CATEGORY_TYPES['CATEGORY'];
        $category->slug = $validatedData['slug'];
        $category->status = Category::getCategoryStatuses()['DRAFT']; // Assuming this method exists in your Category model

        // Handle file uploads if present
        if ($request->hasFile('icon_file')) {
            $path = $request->file('icon_file')->store('public/icons');
            $category->icon_file = $path;
        }

        if ($request->hasFile('background_image')) {
            $path = $request->file('background_image')->store('public/backgrounds');
            $category->background_image = $path;
        }

        // Assign created_by and updated_by if available
        if ($validatedData['created_by']) {
            $category->created_by = $validatedData['created_by'];
        }
        if ($validatedData['updated_by']) {
            $category->updated_by = $validatedData['updated_by'];
        }

        $category->save();

        // Redirect to the index route after saving
        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }
}