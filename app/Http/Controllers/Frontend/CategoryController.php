<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function megacategory()
    {
        try {
            $categories = Category::all()->where('is_active', '=', ACTIVE);
            return response()->json($categories);
        } catch (\Exception $exception){
            return response()->json(['status' => FAIL], 502);
        }
    }

    public function cate_header()
    {
        try {
            $cate_header = Category::all()->where('is_active', '=',ACTIVE)->random(5);
            return response()->json($cate_header);
        } catch (\Exception $exception) {
            return response()->json($exception);
        }
    }
}
