<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->constants = config('constants');
    }

    public function index(Category $category)
    {
        $categories = Category::all();
        return view('categories.addcategory', compact('categories'));
    }   


    public function create()
    {
        $categories = Category::with('createdByUser')->get();
        return view('categories.category', compact('categories'));
    }

    public function store(Request $request)
    {
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
    
        $category = new Category();
        $category->fill($validatedData);
    
        // Handle icon_file upload
        if ($request->hasFile('icon_file')) {
            $path = $request->file('icon_file')->store('public/icons');
            $category->icon_file = str_replace('public/', '', $path);
        }
    
        // Handle background_image upload
        if ($request->hasFile('background_image')) {
            $path = $request->file('background_image')->store('public/backgrounds');
            $category->background_image = str_replace('public/', '', $path);
        }
    
        $category->created_by = Auth::id(); 
        $category->updated_by = Auth::id(); 
        $category->company_id = Auth::id(); 
    
        if (isset($validatedData['parent_id'])) {
            $category->parent_id = $validatedData['parent_id'];
        }
    
        try {
            $category->save();
            return redirect()->route('category.list')->with('success', 'Category created successfully.');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }
    

    public function edit($id)
    {

    }

    public function update(Request $request)
    {

    }

    public function destroy($id)
    {
        
    }
    

}