<?php

namespace Nhanguyen\Hello;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class HelloController extends Controller
{
    public function index($timezone = null)
    {
        $current_time = ($timezone) ? Carbon::now(str_replace('-', '/', $timezone))  : Carbon::now();
        
        return view('plugins::hello', compact('current_time'));
    }
}
