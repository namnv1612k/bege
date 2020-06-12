<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\BackendHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
//        $css = BackendHelper::css('body');
        return view('backend/dashboard');
    }
}
