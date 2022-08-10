<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomAuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }


    public function userRegister(Request $request){
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();

        if($res){
            return back()->with('success', 'You have register successfully');
        }else{
            return back()->with('fail', 'Somthing Wrong');
        }
    }


    public function userLogin(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required|min:5|max:12',
        ]);
        $user = User::where('email', '=', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->id);
                return view('dashboard');
            }else{
                return back()->with('fail', 'This password is not matches');
            }
        }else{
            return back()->with('fail', 'This email is not registerd');
        }
    }


    public function dashboard(){
        return view('dashboard');
    }

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }


    public function forgotEmail(){
        return view('auth.forgot');
    }

    public function emailSend(Request $request){
        $request->validate([
            'email'=>'required|email|unique:users',
        ]);
        
    }


}
