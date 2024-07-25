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
            // $token = $request->header('Authorization'); 
            $token = 'iKDane6y5tpvzZl30PmFYT3w9R2EB6cjSl0E75lrIAms0zrcC2vIC8nUZ3Zy';

            $company = Company::where('token', $token)->first();
    
            if (!$company) {
                return response()->json(['status' => 'error', 'message' => 'Unauthorized access'], 401);
            }
    
            $categories = Category::where('status', '1')
                                  ->where('company_id', $company->id)
                                  ->get();
            
            if ($categories->isEmpty()) {
                return response()->json(['status' => 'empty', 'message' => 'No active categories found for the specified company'], 404);
            }
    
            $categoryData = [];
    
            foreach ($categories as $category) {
                $categoryData[] = [
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
            }
    
            $headers = [
                'Access-Control-Allow-Origin' => 'http://127.0.0.1:8001',
                'Access-Control-Allow-Methods' => 'GET, POST, PUT, DELETE',
                'Access-Control-Allow-Headers' => 'Content-Type, Authorization',
            ];
    
            return response()->json(['status' => 'success', 'message' => 'Active categories for the specified company', 'data' => $categoryData, 'company_token' => $company->token, ], 200, $headers);
       
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
    
}