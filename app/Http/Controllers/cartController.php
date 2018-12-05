<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Gloudemans\Shoppingcart\ShoppingcartServiceProvider;
use Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;

class cartController extends Controller
{

        //Dodaje produkty do koszyka
        public function addToCart(Request $request){
            if(Auth::check()) {
                //pobranie ID produktu
                $productId = $request->productId;
                //pobiera dane z bazy na temat produktu
                $productById = Product::where('id', $productId)->first();
                $price = $productById->price;
                //dodanie do koszyka
                Cart::add([
                    'id' => $productId,
                    'name' => $productById->name,
                    'qty' => $request->qty,
                    'price' => $productById->price,
                ]);
            }else{

            }

              return redirect('/home');
          }

          //POkazuje zawartosc koszyka na stronie koszyka
        public function showCart(){
                $cartProducts = Cart::Content();
                return view('pages.cart')->with('cartProducts',$cartProducts);
            }

            //pokazuje zawartosc koszyka na stronie z zamowieniem
        public function show(){
                $cartProducts = Cart::Content();
                return view('pages.order')->with('cartProducts',$cartProducts);
            }

            //usuwa rzeczy z koszyka
        public function destroy($rowId){
                Cart::remove($rowId);
                return back();
            }

}
