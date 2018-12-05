<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class pagesController extends Controller
{
    public function index(){
    	$products = Product::all();

    	return view('index')->with('products',$products);

    }
    public function log(){
        $products = Product::all();

        return view('logIndex')->with('products',$products);
    }
}
