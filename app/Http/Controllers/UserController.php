<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function loginAction(Request $request){
        $user = User::find($request['id']);
        if(!$user) return back();
        if($user['password'] !== $request['password']) return back();
        Auth::login($user);
        return redirect('/');
    }
}
