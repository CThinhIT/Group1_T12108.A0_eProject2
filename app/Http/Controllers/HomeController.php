<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view ('home.home');
    }

    public function category(){
        return view ('category.category-select-list');
    }

    public function productdetails(){
        return view ('product.product-details');
    }

    public function login(){
        return view ('login.login');
    }

    public function register(){
        return view ('login.register');
    }

    public function contactUS(){
        return view ('contactUs.contactUs');
    }

}
