<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentApi extends Controller
{
    public function postComment(Request $request)
    {
        if ($request->user_id == null) {
            $result = [
                'status' => WARNING,
                'title' => 'Lỗi đăng nhập',
                'message' => 'Bạn cần đăng nhập để bình luận'
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
                'message' => 'Bạn đã thêm 1 bình luận'
            ];
        }

        return response()->json($result);
    }
}
