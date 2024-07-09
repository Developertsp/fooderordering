<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
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
            'slug' => 'required|string|max:255',
            'description' => 'nullable|string',
            'created_by' => 'nullable|string|max:255',
            'updated_by' => 'nullable|string|max:255',
        ]);

        // Create a new category instance
        $category = new Category();
        $category->name = $validatedData['name'];
        $category->type = MyConstants::CATEGORY_TYPES['CATEGORY'];
        $category->slug = $validatedData['slug'];
        $category->status = MyConstants::CATEGORY_STATUSES['DRAFT']; 
        $category->description = $validatedData['description'];

        // Handle file uploads if present
        if ($request->hasFile('icon_file')) {
            $path = $request->file('icon_file')->store('public/icons');
            $category->icon_file = $path;
        }

        if ($request->hasFile('background_image')) {
            $path = $request->file('background_image')->store('public/backgrounds');
            $category->background_image = $path;
        }

        $category->save();

        // Redirect to the index route after saving
        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

}
