<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('layouts.index');
    }

    public function cart(){
        return view('layouts.cart');
    }

    public function addCart(){
        
    }
}
