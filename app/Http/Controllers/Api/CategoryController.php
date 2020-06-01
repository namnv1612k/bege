<?php

namespace App\Http\Controllers\Api;

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
            return response()->json(['status' => 'fail'], 502);
        }
    }
}
