<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class HomeController extends  Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function home()
    {
        return view('admin.pages.home');
    }
}
