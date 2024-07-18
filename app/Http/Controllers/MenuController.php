<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Menu;
use App\Models\Category;

class MenuController extends Controller
{
    public function index()
    {
        // $companyId = Auth::user()->company_id; 
        // $data['menu'] = Menu::where('company_id', $companyId)->where('is_enable', 1)->get();
        return view('menu.list');
    }

    public function create()
    {
        // category should be updated after add company id in category
        $data['categories'] = Category::all();
        return view('menu.create', $data);
    }

    public function store(Request $request)
    {
        // return $request;

        // $validatedData = $request->validate([
        //     'category_id' => 'required|array',
        //     'category_id.*' => 'exists:categories,id',
        //     'product_id' => 'required|array',
        //     'product_id.*' => 'exists:products,id',
        // ]);

        $menuItems = [];

        foreach ($request->category_id as $index => $categoryId) {
            $productId = $request->product_id[$index];

            $menuItems[] = [
                'category_id' => $categoryId,
                'product_id' => $productId,
                'created_by' => Auth::id(),
            ];
        }

        Menu::insert($menuItems);

        return redirect()->route('menu.list')->with('success', 'Data Saved');
    }
}
