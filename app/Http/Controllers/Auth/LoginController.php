<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\Http\Controllers\Controller;


class LoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest',['only'=>'showLoginForm']);
    }
    public function showLoginForm(){
        return view('login');
    }
    public function login(){
         $credentials = $this->validate(request(), [
                $this->username() => 'required|string',
                'password'=> 'required|string'
            ]);
         //return $credentials;
     if(Auth::attempt($credentials)){

        return redirect()->route('index');
        // ,json_encode($credentials['name']));
     }
     return back()->withErrors([$this->username() =>trans('auth.failed')])->withInput(request([$this->username()]));
    }

    public function logout(){
        Auth::logout();
        return redirect('/');

    }
    public function username(){
    return 'name';
    }
}
