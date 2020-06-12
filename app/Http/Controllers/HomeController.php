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
//        dd($news);
        return view('home', compact('slides', 'news'));
    }
}
