<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Product;

class pagesController extends Controller
{
    //pokazuje strone glowna dla nie zalogowanych
    public function index(){
    	$products = Product::all();
        return view('index')->with('products',$products);

    }
    public function log(){
        //sprawdza czy uzytkownik jest zalogowany
        if(Auth::check()){
            //pobiera i zwraca dane z bazy o produktach
            $products = Product::all();
            return view('logIndex')->with('products',$products);
        }else{
            return back();
        }

    }
}
