<?php

namespace App\Helpers;

class ToastrHelper
{
    public static function alert(array $option)
    {
        session()->flash(ALERT_TOASTR, json_encode($option));
    }
}
