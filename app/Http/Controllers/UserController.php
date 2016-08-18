<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;

use Blog\Http\Requests;
use Blog\User;
use Hash;
use Redirect;

class UserController extends Controller
{
    public function index(){
    	$users = User::paginate(4);
    	return view('users.index')->with('users', $users);
    }

    public function show($id){
    	return $id;
    }

    public function create(){
    	return view('users.create');
    }

    public function store(Request $request){
    	$user = new User;
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = Hash::make($request->password);
    	$user->save();

    	return Redirect::to('user');
    }

    public function edit($id){
        $user = User::find($id);
    	return view('users.edit')->with('user', $user);
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return Redirect::to('user');
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();

        return Redirect::to('user');
    }
}
