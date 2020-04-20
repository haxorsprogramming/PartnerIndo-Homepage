<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageCon extends Controller
{
    public function loginPage()
    {
        return view('page.home');
    }
}
