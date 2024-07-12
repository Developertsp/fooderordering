<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $company_id = Auth::user()->company_id;
        $data['products'] = Product::where('company_id', $company_id)->where('is_enable', 1)->get();
        
        return view('products.list', $data);
    }

    public function create()
    {
        // $data['categories'] = Category::
        return view('products.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title'         => 'required',
            'price'         => 'required',
            'description'   => 'required',
        ]);

        $product = new Product();
        $product->title         = $request->title;
        $product->description   = $request->description;
        $product->price         = $request->price;
        $product->category_id   = $request->category_id;
        $product->company_id    = Auth::user()->company_id;
        $product->created_by    = Auth::id();

        $response = $product->save();

        return redirect()->route('products.list')->with('success', 'Product created successfully');
    }

    public function edit($id)
    {
        $data['product'] = Product::find($id);

        return view('products.edit', $data);
    }
}
