<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Cart;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //pokazuje informacje o uzytkowniku hasla etc
    public function index()
    {
        if(Auth::check()) {
            $user = User::where('id', Auth::id())->first();
            return view('pages.user_data')->with('user', $user);
        }else{
            return back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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


        //aktualizacja danych uzytkownika

        //znajduje rekord do aktualizacji
        $user = User::find($id);
        //zapytanie, ktore aktualizuje
        $userUpdate = User::where('id',$user->id)->update([
        'name' => $request->input('name'),
        'surname' => $request->input('surname'),
        'email' => $request->input('email'),
        'password' =>Hash::make($request->input('password')),
        'city' => $request->input('city'),
        'street' => $request->input('street'),
        'houseNumber' => $request->input('houseNumber'),
        'postCode' => $request->input('postCode')
        ]);
            //cofa na strone z danymi
            return back()->with('user',$user);
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
