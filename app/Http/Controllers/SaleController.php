<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index(Request $request)
    {
        return view('show-sales');
    }

    public function newSale(Request $request)
    {
        if(session()->has('cart')) {
            $products = session()->get('cart');
        }else {
            $products = [];
        }
        
        return view('new-sale',[
            'products' => $products
        ]);
    }



    public function addProduct(Request $request)
    {
        # code...
    }

    public function removeProduct(Request $request)
    {
        # code...
    }
}
