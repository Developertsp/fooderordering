<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Constants\MyConstants;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('createdByUser')->get();
        return view('categories.category', compact('categories'));
    }

    public function fetch()
    {
        // Fetch all categories from the database
        $categories = Category::all();
        
        // Pass categories data to the view
        return view('categories.category', compact('categories'));
    }

    public function show(Category $category)
    {
        $categories = Category::all();
        
        // Pass categories data to the view
        return view('categories.addcategory', compact('categories'));
    } 
    public function store(Request $request)
    {
        // Validate request data 
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories,slug',
            'desc' => 'nullable|string',
            'type' => 'required|in:1,2',
            'status' => 'required|in:1,2,3', 
            'icon_file' => 'nullable|file|image|max:2048', 
            'background_image' => 'nullable|file|image|max:2048', 
            'parent_id' => 'nullable|exists:categories,id',
        ]);

        // Create a new category 
        $category = new Category();
        $category->name = $validatedData['name'];
        $category->desc = $validatedData['desc'];
        $category->type = $validatedData['type']; 
        $category->slug = $validatedData['slug'];
        $category->status = $validatedData['status'];
       
        // Handle file uploads if present
        if ($request->hasFile('icon_file')) {
            $path = $request->file('icon_file')->store('icons');
            $category->icon_file = $path;
        }

        if ($request->hasFile('background_image')) {
            $path = $request->file('background_image')->store('backgrounds');
            $category->background_image = $path;
        }

        // Assign created_by and updated_by
        $category->created_by = Auth::id(); 
        $category->updated_by = Auth::id(); 

        // Assign parent_id if available
        if (isset($validatedData['parent_id'])) {
            $category->parent_id = $validatedData['parent_id'];
        }

        try {
            // Save the category instance
            $category->save();

            // Redirect route
            return redirect()->route('addcategory')->with('success', 'Category created successfully.');
        } catch (\Exception $e) {
            // Handle any exceptions (e.g., database errors)
            return back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }
    

}