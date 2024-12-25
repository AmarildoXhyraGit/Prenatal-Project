<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\User;

class AuthenticationController extends Controller
{
    public function create(){
        return  view('components.Authentication.registrati');
       }
       public function store(){
        $attributes=request()->validate([
            'name'=>'required|min:3',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:8',
        ]);
        $attributes['password']=bcrypt($attributes['password']); 
    User::create($attributes);
    $attributes=request()->validate([
          
        'email'=>'required|email',
        'password'=>'required',
    ]);
    if(auth()->attempt($attributes)){
        return back();
    }
       }
       public function createl(){
        return  view('components.Authentication.loginnew');
       }
       public function storel(){
        $attributes=request()->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        if(auth()->attempt($attributes)){
          return back();
        }
        return back();
    }
    public function logout(){
    auth()->logout();
    return redirect('/');
    }
}