<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
   public function login()
   {
    return view('welcome');
   }

   public function auth(Request $request)
   {

        Session::flash('email', $request->email);
        Session::flash('password', $request->password);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ],[
            'email','required' => 'Email wajib di isi !',
            'password','required' => 'Password wajib di isi !',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

           return redirect()->intended('dashboard');
        }
        return redirect()->to('/');  
   }

   public function logout()
   {
    Auth::logout();
    return redirect()->to('/');
   }
}
