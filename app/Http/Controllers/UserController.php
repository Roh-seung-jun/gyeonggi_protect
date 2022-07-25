<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function signPage(){
        return view('sign');
    }

    public function loginPage(){
        return view('login');
    }
    public function sign(Request $request){
        $input = $request->only(['id','name','password']);
        if(User::find($request['id'])) return back()->with('msg','이미 존재하는 아이디입니다.');
        $input['type'] = 'normal';
        User::create($input);
        return redirect('/')->with('msg','회원가입이 완료되었습니다.');
    }
    public function login(Request $request){
        $user = User::find($request['id']);
        if(!$user || $user['password'] !== $request['password']) return back()->with('msg','아이디 또는 비밀번호를 확인해주세요');
        Auth::login($user);
        return redirect('/')->with('msg','어서오세요. '.$user['name'].'님');
    }
    public function logout(){
        Auth::logout();
        return redirect('/')->with('msg','로그아웃되었습니다');
    }
}
