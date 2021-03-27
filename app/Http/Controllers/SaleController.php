<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index(Request $request)
    {
        return view('show-sales');
    }

    public function newSale(Request $request)
    {
        return view('new-sale');
    }
}
