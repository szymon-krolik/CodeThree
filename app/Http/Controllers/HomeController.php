<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //sprawdza autoryzaje uzytkownika
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    //zwraca porodukty
    public function index()
    {
        $products = Product::all();
        return view('home')->with('products',$products);
    }
}
