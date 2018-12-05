<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Gloudemans\Shoppingcart\ShoppingcartServiceProvider;
use Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class cartController extends Controller
{
      public function addToCart(Request $request){
          $productId = $request->productId;

          $productById = Product::where('id',$productId)->first();
            $price = $productById->price;
          Cart::add([
             'id' => $productId,
             'name' => $productById -> name,
             'qty' => $request->qty,
             'price' => $productById ->price,

          ]);



          return redirect('/home');
      }

      public function showCart(){
          $cartProducts = Cart::Content();

          return view('pages.cart')->with('cartProducts',$cartProducts);
      }

      public function deleteCart(){


}

 public function show(){
            $cartProducts = Cart::Content();
            return view('pages.order')->with('cartProducts',$cartProducts);
}

}
