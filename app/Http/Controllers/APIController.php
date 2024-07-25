<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Category;
use App\Models\Company;

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
}
