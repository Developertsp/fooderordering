<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Category;

class ApiController extends Controller
{
    public function categories(Request $request): JsonResponse
    {
        try {
            // Fetch categories where status is active
            $categories = Category::where('status', '1')->get();
            
            if ($categories->isEmpty()) {
                return response()->json(['status' => 'empty', 'message' => 'No active categories found'], 404);
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

            return response()->json(['status' => 'success', 'message' => 'All active categories', 'data' => $categoryData]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Error retrieving categories', 'error' => $e->getMessage()], 500);
        }
    }

}
