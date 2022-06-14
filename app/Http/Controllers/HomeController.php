<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view ('home.home');
    }

    public function category1(){
        return view ('category1.category-1');
    }

    public function productdetails(){
        return view ('product.product-details');
    }
}
