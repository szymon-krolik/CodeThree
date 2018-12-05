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
    public function index()
    {
        $items = Cart::content();
        $price = Cart::subtotal();
        $user = User::where('id',Auth::id())->first();
        //$user = DB::table('users')->where('id','=',Auth::id())->get();

        //return view('pages.order')->with('cartProducts',$cartProducts)->with('user',$user);

        //return view('pages.order', compact('cartProducts'))->with('user',$user);
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

        $cartItems= Cart::content();
        $cartTotal = Cart::subtotal();
        $total = $request->input('Total');
        $dlugosc = count($cartItems);

       for($i =$dlugosc;$i<=$dlugosc;$i++){
            foreach($cartItems as $cartItem){
                DB::table('orders')->insert([
                    'user_id' => Auth::id(),
                    'product_id' => $cartItem->id,
                    'quantity' => $cartItem -> qty,
                    'price' =>  $cartItem ->price,
                    'created_at' => now()
                ]);
            };
        }


       return view('pages.thank')->with('dlugosc', $dlugosc);




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
