<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cart;
use App\User;
use Illuminate\Support\Facades\Input;
use App\Order;


class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //pokazuje zamowienie na stronie
    public function index()
    {
        $items = Cart::content();
        $price = Cart::subtotal();
        $user = User::where('id',Auth::id())->first();
        return view('pages.order', compact('price'),compact('items'))->with('user',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check()){
            //pobiera caly koszyk
            $cartItems = Cart::content();
            //pobiera kwote zamowilenia
            $cartTotal = Cart::subtotal();
            $total = $request->input('Total');

            //liczy dlugosc tablicy z produkatami
            $dlugosc = count($cartItems);

            //wykonuje inserta do bazy
            for ($i = $dlugosc; $i <= $dlugosc; $i++) {

                //przeglada cala tablice z przedmiotami i wypisuje
                foreach ($cartItems as $cartItem) {
                    DB::table('orders')->insert([
                        'user_id' => Auth::id(),
                        'product_id' => $cartItem->id,
                        'qty' => $cartItem->qty,
                        'price' => $cartItem->price,
                        'created' => now()
                    ]);
                };
            }

            //zwraca strone z podziekowaniami za zakupy
            return view('pages.thank');
        }
        else{
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //$orders  = DB::table('orders')->where('user_id',Auth::id())->get();
        $orders = DB::table('orders')->join('products','orders.product_id','=','products.id')->where('user_id',Auth::id())->get();
        return view('pages.my_order')->with('orders',$orders);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
