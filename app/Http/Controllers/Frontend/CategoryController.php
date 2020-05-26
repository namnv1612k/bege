<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function meganenu()
    {
        try {
            $categories = Category::all()->where('is_active', '=', ACTIVE);
            dd(response()->json($categories));
            return response()->json($categories);
        } catch (\Exception $exception){
            return response()->json(['status' => 'fail']);
        }
    }
}
