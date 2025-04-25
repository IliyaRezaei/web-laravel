<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    public function show($id){
        $user = User::find($id);
        dd($user->logs()->get());
        //return view('users.show', ['user' => $user]);
    }

    public function store()
    {
        User::create(request()->only(['name', 'email', 'password']));
        return redirect()->to('/users');
    }

    public function edit($id)
    {
        $user = User::find($id);
        if(!$user)
            abort(404);

        return view('users.edit', ['user' => User::find($id)]);
    }

    public function update($id)
    {
        $user = User::find($id);
        $user->update(request()->only(['name', 'email']));
        return redirect()->to('/users');
    }
    public function destroy($id){
        User::find($id)->delete();
        return redirect()->to('/users');
    }
}
