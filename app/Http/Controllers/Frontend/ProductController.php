<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Tag;
use App\Models\Wishlist;
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
        return view('product/detail', compact('product', 'product_related'));
    }

    public function addWish(Request $request)
    {
        if (!Auth::check()) {
            $result = [
                'status' => FAIL,
                'title' => 'Không thể thêm',
                'content' => 'Bạn phải đăng nhập để sử dụng chức năng này',
            ];
        } else {
            try {
                $product_id = $request->product_id;
                $user_id = Auth::id();

                $product = Product::findOrFail($product_id);

                if (Wishlist::where('product_id', '=', $product_id)->where('user_id','=', $user_id)->exists()) {
                    $result = [
                        'status' => EXIST,
                        'title' => 'Đã tồn tại',
                        'content' => 'Sản phẩm ' . $product->name . ' đã ở trong danh sách yêu thích',
                    ];
                } else {
                    $wishlist = new Wishlist;
                    $wishlist->product_id = $product_id;
                    $wishlist->user_id = $user_id;

                    $wishlist->save();
                    $result = [
                        'status' => SUCCESS,
                        'title' => 'Thành công',
                        'content' => 'Đã thêm ' . $product->name . ' vào danh sách yêu thích',
                    ];
                }

            } catch (Exception $exception) {
                $result = [
                    'status' => FAIL,
                    'title' => 'Có Lỗi xảy ra',
                    'content' => 'Có lỗi không xác định đã xảy ra',
                ];
            }
        }

        return response()->json($result);
    }

    public function postComment(Request $request)
    {
        if ($request->user_id == null) {
            $result = [
                'status' => WARNING,
                'title' => 'Lỗi đăng nhập',
                'content' => 'Bạn cần đăng nhập để bình luận'
            ];
        } else {
            if ($request->type == 'blog') {
                DB::table('blog_comments')->insert([
                    'content' => $request->comment,
                    'reply_for' => $request->reply_for ?? null,
                    'user_id' => $request->user_id,
                    'blog_id' => $request->id
                ]);
            } elseif ($request->type == 'product') {
                DB::table('comments')->insert([
                    'content' => $request->comment,
                    'reply_for' => $request->reply_for ?? null,
                    'user_id' => $request->user_id,
                    'product_id' => $request->id,
                    'rate' => $request->rate ?? 5
                ]);

                $commens = Comment::all()->where('product_id', '=', $request->id);
                $total_rate = 0;
                foreach ($commens as $value) {
                    $total_rate += $value->rate;
                }
                $tb_rate_product = $total_rate/count($commens);

                Product::find($request->id)->update(['rate' => $tb_rate_product]);
            }
            $result = [
                'status' => SUCCESS,
                'title' => 'Thành công',
                'content' => 'Bạn đã thêm 1 bình luận'
            ];
        }

        return response()->json($result);
    }
}
