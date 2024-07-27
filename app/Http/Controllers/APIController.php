<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Category;
use App\Models\Company; 
use App\Models\Menu;
use App\Models\Product;
use App\Models\RestaurantSchedule;

class ApiController extends Controller
{
    public function categories(Request $request): JsonResponse
    {
        try {
            // Retrieve token from Authorization header
            $token = $request->header('Authorization');

            // Find company by token
            $company = Company::where('token', $token)->first();

            // Check if company exists
            if (!$company) {
                return response()->json(['status' => 'error', 'message' => 'Unauthorized access'], 401);
            }

            // Retrieve categories belonging to the authenticated company
            $categories = Category::where('status', '1')
                                  ->where('company_id', $company->id)
                                  ->get();

            // Check if categories found
            if ($categories->isEmpty()) {
                return response()->json(['status' => 'empty', 'message' => 'No active categories found for your company'], 404);
            }

            
            $categoryData = $categories->map(function ($category) {
                return [
                    'id' => $category->id,
                    'attributes' => [
                        'name' => $category->name,
                        'desc' => $category->desc,
                        'type' => $category->type,
                        'icon_file' => $category->icon_file,
                        'background_image' => $category->background_image,
                        'slug' => $category->slug,
                        'status' => $category->status,
                        'created_at' => $category->created_at,
                        'updated_at' => $category->updated_at,
                        'parent_id' => $category->parent_id,
                        'company_id' => $category->company_id,
                        'created_by' => $category->created_by,
                        'updated_by' => $category->updated_by,
                    ],
                ];
            });

            // Prepare CORS headers
            $headers = [
                'Access-Control-Allow-Origin' => 'http://127.0.0.1:8001',
                'Access-Control-Allow-Methods' => 'GET, POST, PUT, DELETE',
                'Access-Control-Allow-Headers' => 'Content-Type, Authorization',
            ];

            return response()->json(['status' => 'success', 'message' => 'Active categories for your company', 'data' => $categoryData, 'company_token' => $company->token,], 200, $headers);

        } catch (\Exception $e) {
            
            return response()->json(['status' => 'error', 'message' => 'Error retrieving categories', 'error' => $e->getMessage()], 500);
        }
    }

    public function menu(Request $request)
    {
        $response = validate_token($request->header('Authorization'));
        $responseData = $response->getData();

        if($responseData->status == 'success'){
            $companyId = $responseData->company->id;
            $menu = Menu::with('category','product')->where('company_id', $companyId)->where('is_enable', 1)->get();

            return response()->json(['status' => 'success', 'message' => 'Menu Found', 'data' => $menu], 200);
        }
        else{
            return response()->json(['status' => $responseData->status, 'message' => $responseData->message], 401);
        }
    }

    public function products(Request $request)
    {
        // fetch all products of a company
        $response = validate_token($request->header('Authorization'));
        $responseData = $response->getData();

        if($responseData->status == 'success'){
            $companyId = $responseData->company->id;
            $products = Product::with('category')->where('company_id', $companyId)->where('is_enable', 1)->get();

            return response()->json(['status' => 'success', 'message' => 'Products Found', 'data' => $products], 200);
        }
        else{
            return response()->json(['status' => $responseData->status, 'message' => $responseData->message], 401);
        }
    }

    public function category_products(Request $request, $category = null)
    {
        // Fetch prdocuts of a specific category
        $response = validate_token($request->header('Authorization'));
        $responseData = $response->getData();

        if($responseData->status == 'success'){
            if($category){
                $categoryDetail = Category::where('slug', $category)->where('status', 1)->first();
                $companyId = $responseData->company->id;

                $products = Product::with('category')->where('company_id', $companyId)->where('category_id', $categoryDetail->id)->where('is_enable', 1)->get();

                return response()->json(['status' => 'success', 'message' => 'Products Found', 'data' => $products], 200);
            }
            else{
                return response()->json(['status' => 'error', 'message' => 'Kindly provide category', 'data' => ''], 404);
            }
        }
        else{
            return response()->json(['status' => $responseData->status, 'message' => $responseData->message], 401);
        }
    }

    public function schedule(Request $request)
    {
        $response = validate_token($request->header('Authorization'));
        $responseData = $response->getData();

        if($responseData->status == 'success'){
            $companyId = $responseData->company->id;
            $schedule = RestaurantSchedule::where('company_id', $companyId)->get();

            return response()->json(['status' => 'success', 'message' => 'Schedule Found', 'data' => $schedule], 200);
        }
        else{
            return response()->json(['status' => $responseData->status, 'message' => $responseData->message], 401);
        }
    }

    public function categories_a(Request $request)
    {
        $response = validate_token($request->header('Authorization'));
        
        $responseData = $response->getData();

        if($responseData->status == 'success'){
            $companyId = $responseData->company->id;
            $categories = Category::where('company_id', $companyId)->where('status', 1)->get();

            return response()->json(['status' => 'success', 'message' => 'Categories List', 'data' => $categories], 200);
        }
        else{
            return response()->json(['status' => $responseData->status, 'message' => $responseData->message], 401);
        }
    }
    
}
