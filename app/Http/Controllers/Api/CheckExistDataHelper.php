<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckExistDataHelper extends Controller
{
    public function common(Request $request)
    {
        $table = $request->table;
        $column = $request->column;
        $value = $request->value;

        $data = DB::table($table)->where($column, '=', $value)->first();
        if (!$data) {
            return response()->json(['status' => 'success']);
        }
        return response()->json(['status' => 'fail']);
    }
}
