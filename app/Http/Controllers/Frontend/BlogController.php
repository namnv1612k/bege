<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $request->only(['tag', 'category', 'page', 'keyword']);
        $tags = BlogTag::all()->take(LIMIT_TAG);
        $blog_recent = Blog::all()->where('is_active', '=', ACTIVE)->take(5)->sortByDesc('id');

        // Blog
        if ($request->category != null && $request->tag != null) {
            if ($request->keyword != null) {
                $blogs = Blog::whereHas('categories', function ($c) use ($request) {
                    $c->where('slug', '=',  $request->category);
                })->whereHas('tags', function ($t) use ($request) {
                    $t->where('slug', '=', $request->tag);
                })->where('is_active', '=', ACTIVE)
                    ->where('name', 'LIKE', '%' . $request->keyword . '%')
                    ->paginate(PAGINATION_BLOG);
            } else {
                $blogs = Blog::whereHas('categories', function ($c) use ($request) {
                    $c->where('slug', '=',  $request->category);
                })->whereHas('tags', function ($t) use ($request) {
                    $t->where('slug', '=', $request->tag);
                })->where('is_active', '=', ACTIVE)
                    ->paginate(PAGINATION_BLOG);
            }

        } elseif ($request->category != null && $request->tag == null) {
            if ($request->keyword != null) {
                $blogs = Blog::whereHas('categories', function ($c) use ($request) {
                    $c->where('slug', '=',  $request->category);
                })->where('is_active', '=', ACTIVE)
                    ->where('name', 'LIKE', '%' . $request->keyword . '%')
                    ->paginate(PAGINATION_BLOG);
            } else {
                $blogs = Blog::whereHas('categories', function ($c) use ($request) {
                    $c->where('slug', '=',  $request->category);
                })->where('is_active', '=', ACTIVE)
                    ->paginate(PAGINATION_BLOG);
            }
        } elseif ($request->tag != null && $request->category == null) {
            if ($request->keyword != null) {
                $blogs = Blog::whereHas('tags', function ($t) use ($request) {
                    $t->where('slug', '=',  $request->tag);
                })->where('is_active', '=', ACTIVE)
                    ->where('name', 'LIKE', '%' . $request->keyword . '%')
                    ->paginate(PAGINATION_BLOG);
            } else {
                $blogs = Blog::whereHas('tags', function ($t) use ($request) {
                    $t->where('slug', '=',  $request->tag);
                })->where('is_active', '=', ACTIVE)
                    ->paginate(PAGINATION_BLOG);
            }
        } else {
            if ($request->keyword != null) {
                $blogs = Blog::where('is_active', '=', ACTIVE)
                    ->where('name', 'LIKE', '%' . $request->keyword . '%')
                    ->paginate(PAGINATION_BLOG);
            } else {
                $blogs = Blog::where('is_active', '=', ACTIVE)->paginate(PAGINATION_BLOG);
            }
        }

        if ($request->keyword != null) {
            $blogs->where('name', '=', $request->keyword);
        }
        return view('blog/index', compact('blogs', 'tags', 'blog_recent'));
    }

    public function detail($slug)
    {
        $blog = Blog::all()->where('slug', '=', $slug)->first();
        $blog_related = Blog::all()->take(3);
        if ($blog == null) {
            return view('errors/404');
        }
        return view('blog/detail', compact('blog', 'blog_related'));
    }

    public function postComment(Request $request)
    {
        dd($request->user_id);
        if ($request->comment != null) {

        }
    }
}
