<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Childcategory;
use App\Models\Subcategory;
use App\Models\Category;

class ApiCategoryController extends Controller
{
    public function getCategory()
    {
        $category=Category::all();
        return response()->json($category);
    }
    public function getSubCategory(Request $request)
    {
        $subcategory=Subcategory::where('category_id',$request->category_id)->get();
        return response()->json($subcategory);
    }
    public function getChildCategory(Request $request)
    {
        $childcategory=Childcategory::where('subcategory_id',$request->subcategory_id)->get();
        return response()->json($childcategory);
    }
}
