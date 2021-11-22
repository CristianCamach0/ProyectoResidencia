<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AutenticarUser extends Controller
{
     public function validar()
    {
    $credenciales = request()->only('email','password');
    $rol= request()->only('rol');
    
    if(Auth::attempt($credenciales)&& $rol='supervisor'){
        request()->session()->regenerate();
        if($rol="supervisor"){
            return view('supervisor.index');
        }
         
    }

    if(Auth::attempt($credenciales) && $rol='contador'){
        request()->session()->regenerate();
         if($rol="contador"){
            return view('contador.index');
        }
    }
    return 'datos erroneos';
    
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
