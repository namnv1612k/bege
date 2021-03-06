<?php

namespace App\Helpers;

use App\Models\Category;

class CategoryHelper
{
    public static function menu_category($id)
    {
        try {
            $array = Category::all()->where('is_active', '=', ACTIVE);
            $resp = false;
            foreach ($array as $value) {
                if ($value->subcategory == $id) {
                    $resp = true;
                }
            }
            return $resp;
        } catch (\Exception $exception) {
            return $exception;
        }
    }
}
