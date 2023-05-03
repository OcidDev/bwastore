<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        return view('pages.dashboard');
    }

    public function product()
    {
        return view('pages.dashboard-products');
    }

    public function product_detail($id)
    {
        return view('pages.dashboard-product-details');
    }

    public function transaction()
    {
        return view('pages.dashboard-transaction');
    }

    public function transaction_detail()
    {
        return view('pages.dashboard-transaction-detail');
    }

    public function setting()
    {
        return view('pages.dashboard-setting');
    }

    public function account()
    {
        return view('pages.dashboard-account');
    }

}
