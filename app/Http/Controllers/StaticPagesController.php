<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    //
    public function home()
    {

//        Redis::set('name', 'Taylor');
        return view('static_pages/home');
    }

    public function help()
    {
        return view('static_pages/help');
    }

    public function about()
    {
//        $name = Redis::get('name');
//        var_dump($name);
        return view('static_pages/about');
    }
}


