<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User_CartController extends Controller
{
    public function cart(){
        return view ('basket.cart');
    }
}
