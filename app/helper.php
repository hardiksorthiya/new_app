<?php
use App\Models\Admin\SolutionPages;
use App\Models\Admin\Setting;


if (!function_exists('checkAuthenticationType')) {
    function checkAuthenticationType()
    {
        $data = SolutionPages::get();
        return $data;
    }
}

if (!function_exists('generalsetting')) {
    function generalsetting()
    {
        $data = Setting::first();
        return $data;
    }
}