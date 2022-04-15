<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    
    public function create(){
        return view('auth.login');
    }
    public function store(){
        if(auth()->attempt(request(['email', 'password']))==false){
            return back()->withErrors([
                'message'=>'el email o contraseña es incorrecto'
            ]);
        }
        return redirect()->to('/');
    }
    Public function destroy(){
        auth()->logout();
        return redirect()->to('/');

    }
}
