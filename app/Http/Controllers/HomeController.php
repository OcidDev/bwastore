<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.home');
    }

    public function category()
    {
        return view('pages.category');
    }

    public function details($id)
    {
        return view('pages.details');
    }

    public function cart($id)
    {
        return view('pages.cart');
    }
    public function success()
    {
        return view('pages.success');
    }
}
