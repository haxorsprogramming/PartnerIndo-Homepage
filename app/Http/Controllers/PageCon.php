<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageCon extends Controller
{
    public function home()
    {
        return view('page.home');
    }

    public function profile()
    {
        return view('page.profile');
    }
}
