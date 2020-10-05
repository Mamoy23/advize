<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get('http://localhost:3000/users');

        $users = json_decode($response->body(), true);

        if($response->status() != 200) {
            return redirect('/users');
        }
        else {
            return view('users', ['users' => $users]);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = Http::post('http://localhost:3000/users', [
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'birthdate' => $request->input('birthdate')
        ]);
        if($response->status() != 200) {
            return back()->withInput();
        }
        else {
            return redirect('/users');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response = Http::get("http://localhost:3000/users/{$id}");

        $user = json_decode($response->body(), true);

        if($response->status() != 200) {
            return redirect('/users');
        }
        else {
            return view('user', ['user' => $user]);
        }

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
        $response = Http::put("http://localhost:3000/users/{$id}", [
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'birthdate' => $request->input('birthdate')
        ]);
        if($response->status() != 200) {
            return back()->withInput();
        }
        else {
            return redirect('/users');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = Http::delete("http://localhost:3000/users/{$id}");

        if($response->status() != 200) {
            return back()->withInput();
        }
        else {
            return redirect('/users');
        }
    }
}
