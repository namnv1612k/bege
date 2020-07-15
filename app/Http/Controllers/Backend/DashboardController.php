<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\BackendHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend/dashboard/analytic');
    }

    public function sale()
    {
        return view('backend/dashboard/sale');
    }
}
