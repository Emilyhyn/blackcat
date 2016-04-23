<?php
/**
 * Created by PhpStorm.
 * User: emily
 * Date: 18/04/2016
 * Time: 12:27 PM
 */
namespace Blackcat\Http\Controllers;
use Illuminate\Http\Request;
use Blackcat\Models\User;


class AuthController extends Controller{

    public function getSignup(){
        return view('auth.signup');
    }
    public function postSignup(Request $request){
//        dd('sign up successfully');
        $this->validate($request,[
            'email' => 'required|unique:users|email|max:255',
            'username' =>'required|unique:users|alpha_dash|max:20',
            'password'=>'required|min:6',
        ]);

//        dd('all ok');
        User::create([
           'email'=>$request->input('email'),
           'username'=> $request->input('username'),
            'password'=>bcrypt($request->input('password')),
        ]);

        return redirect()
            ->route('home')
            ->with('info','Your account has been created and you can now sign in');
    }
    public function getSignin(){
        return view('auth.signin');
    }
    public function postSignin(Request $request){
        $this->validate($request,[
           'email'=>'required',
           'password'=>'required',
        ]);
        dd('all ok');
    }
}
