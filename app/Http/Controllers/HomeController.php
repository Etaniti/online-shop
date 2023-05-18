<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
     /**
     * Show the application home page.
     *
     * @return View
     */
    public function index(): View
    {
        return view('home');
    }
}
