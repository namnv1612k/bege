<?php

namespace App\Http\Controllers;

use App\Models\Slide;

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
        return view('home', compact('slides'));
    }
}
