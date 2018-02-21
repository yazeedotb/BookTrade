<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;

class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $account = Account::find($id);
        return view('editAccount')->with('account', $account);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $account = Account::find($id);
        return view('editAccount')->with('account', $account);
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
        $this->validate ($request, [
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'location' => 'required',
        ]);
        //Create post
        $account = Account::find($id);
        $account->name = $request->input('username');
        $account->email = $request->input('email');
        $pass = $request->input('password');
        $account->password = bcrypt($pass);
        $account->first_name = $request->input('first_name');
        $account->last_name = $request->input('last_name');
        $account->location = $request->input('location');

        $account->save();

        return redirect('/home/')->with('success', 'Account updated');
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
