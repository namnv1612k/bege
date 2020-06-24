<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Helpers\ProductHelper;
use Mockery\Exception;

class ProductController extends Controller
{
    public function shop(Request $request)
    {
        $request->only(['tag', 'category', 'page', 'keyword']);

        $categories = Category::all()
            ->where('is_active', '=', ACTIVE)
            ->where('subcategory', '=', null)
            ->take(LIMIT_CATEGORY);
        $tags = Tag::all()->take(LIMIT_TAG);
        $products_topRate = Product::all()
            ->where('is_active', '=', ACTIVE)
            ->sortByDesc('rate')
            ->take(3);

        // Product
        if ($request->category != null && $request->tag != null) {
            if ($request->keyword != null) {
                $products = Product::whereHas('categories', function ($c) use ($request) {
                    $c->where('slug', '=',  $request->category);
                })->whereHas('tags', function ($t) use ($request) {
                    $t->where('slug', '=', $request->tag);
                })->where('is_active', '=', ACTIVE)
                    ->where('name', 'LIKE', '%' . $request->keyword . '%')
                    ->paginate(PAGINATION_PRODUCT);
            } else {
                $products = Product::whereHas('categories', function ($c) use ($request) {
                    $c->where('slug', '=',  $request->category);
                })->whereHas('tags', function ($t) use ($request) {
                    $t->where('slug', '=', $request->tag);
                })->where('is_active', '=', ACTIVE)
                    ->paginate(PAGINATION_PRODUCT);
            }

        } elseif ($request->category != null && $request->tag == null) {
            if ($request->keyword != null) {
                $products = Product::whereHas('categories', function ($c) use ($request) {
                    $c->where('slug', '=',  $request->category);
                })->where('is_active', '=', ACTIVE)
                    ->where('name', 'LIKE', '%' . $request->keyword . '%')
                    ->paginate(PAGINATION_PRODUCT);
            } else {
                $products = Product::whereHas('categories', function ($c) use ($request) {
                    $c->where('slug', '=',  $request->category);
                })->where('is_active', '=', ACTIVE)
                    ->paginate(PAGINATION_PRODUCT);
            }
        } elseif ($request->tag != null && $request->category == null) {
            if ($request->keyword != null) {
                $products = Product::whereHas('tags', function ($t) use ($request) {
                    $t->where('slug', '=',  $request->tag);
                })->where('is_active', '=', ACTIVE)
                    ->where('name', 'LIKE', '%' . $request->keyword . '%')
                    ->paginate(PAGINATION_PRODUCT);
            } else {
                $products = Product::whereHas('tags', function ($t) use ($request) {
                    $t->where('slug', '=',  $request->tag);
                })->where('is_active', '=', ACTIVE)
                    ->paginate(PAGINATION_PRODUCT);
            }
        } else {
            if ($request->keyword != null) {
                $products = Product::where('is_active', '=', ACTIVE)
                    ->where('name', 'LIKE', '%' . $request->keyword . '%')
                    ->paginate(PAGINATION_PRODUCT);
            } else {
                $products = Product::where('is_active', '=', ACTIVE)->paginate(PAGINATION_PRODUCT);
            }
        }

        if ($request->keyword != null) {
            $products->where('name', '=', $request->keyword);
        }

//        dd($products[4]->categories);

        return view('product/shop',
            compact(
                'products',
                'categories',
                'products_topRate',
                'tags'
            ));
    }

    public function quickview($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product);
    }

    public function detail($slug)
    {
        $product = Product::all()->where('slug', '=', $slug)->first();
        if ($product == null) {
            return view('errors/404');
        }
        $product_related = Product::all()->random(5);
//        dd($product_related);
        return view('product/detail', compact('product', 'product_related'));
    }
}
