<?php
use App\Models\Admin\SolutionPages;


if (!function_exists('checkAuthenticationType')) {
    function checkAuthenticationType()
    {
        $data = SolutionPages::get();
        // if (Auth::user()) {
        //     if (Auth::user()->type) {
        //         if (Auth::user()->type == 2) {
        //             return redirect()->route('admin_index');
        //         } elseif (Auth::user()->type == 1) {
        //             return redirect()->route('academy_index');
        //         } else {
        //             return redirect()->route('index');
        //         }
        //     }
        // }

        return $data;
    }
}