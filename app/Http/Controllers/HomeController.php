<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = "หน้าแรกของร้านค้า";
        return view('home', compact('title'));
    }

    public function about(){
        return view('about')->with('title', 'เกี่ยวกับเรา');
    }
}
