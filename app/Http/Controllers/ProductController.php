<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Option;
use App\Models\ProductOption;

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
        $companyId = Auth::user()->company_id; 
        $data['options'] = Option::where('company_id', $companyId)->where('is_enable', 1)->get();
        return view('products.create', $data);
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
        if($response){
            $options = $request->options;
            foreach($options as $option){
                $productOption = new ProductOption();
                $productOption->product_id = $product->id;
                $productOption->option_id = $option;
                $productOption->save();
            }
        }
        else{
            return redirect()->route('products.create')->with('failed', 'Something went wrong');
        }

        return redirect()->route('products.list')->with('success', 'Product created successfully');
    }

    public function edit($id)
    {
        $companyId = Auth::user()->company_id; 
        $data['product'] = Product::with('options.option.option_values')->find($id);
        $data['options'] = Option::where('company_id', $companyId)->where('is_enable', 1)->get();
        $data['product_options'] = $data['product']->options->pluck('option_id')->toArray();
        
        return view('products.edit', $data);
    }
}
