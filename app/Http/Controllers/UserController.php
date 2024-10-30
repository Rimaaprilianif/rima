<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $user = User::all();
       return view('home.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return vieW('home.user.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name' =>  $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view('home.user.edit', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserController $userController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserController $userController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserController $userController)
    {
        //
    }
}
