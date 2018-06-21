<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Show index page.
     *
     * @return string
     */
    public function index()
    {
        return view('spa.index');
    }
}
