<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Product;
use App\Models\Slide;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slides = Slide::all()->where('is_active', '=', ACTIVE)->sortBy('sort');
        $news = News::all()->where('is_active','=', ACTIVE)->sortBy('sort')->take(4);
        $deal_of_day = Product::all()->where('is_active','=', ACTIVE)->sortBy('sale_price')->take(3);
        $best_sellers = Product::all()->where('is_active','=', ACTIVE)->sortBy('sale_price')->take(16);
        $top_last = Product::all()->where('is_active','=', ACTIVE)->sortByDesc('created_at');
        $top_rate = Product::all()->where('is_active','=', ACTIVE)->sortByDesc('rate');
        $top_feature = Product::all()->where('is_active','=', ACTIVE)->sortByDesc('updated_at');

        return view('home',
            compact(
                'slides','news', 'deal_of_day', 'best_sellers', 'top_last', 'top_rate', 'top_feature'));
    }
}
