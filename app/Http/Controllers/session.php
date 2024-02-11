<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class session extends Controller
{
    function index()
    {
       return view('login');
    }
    function login(Request $request)
    {
      $request->validate([
        'email'=> 'required',
        'password'=> 'required',
      ], 
      
      [
        'email.required'=>'Email Wajib diisi',
        'password.required'=>'Password Wajib diisi'


      ]); 
      
      $infologin =[
        'email'=>$request->email,
        'password'=>$request->password,
      ];
      

      if(Auth::attempt($infologin)){
        return redirect('admin');

      }else{
        return redirect('')->withErrors('Username dan Password yang Dimasukkan Tidak Sesuai')->withInput();
      }
            
    }
    
}
