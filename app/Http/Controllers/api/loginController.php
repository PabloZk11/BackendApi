<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function register(Request $request){

        $usuario = new usuario();

        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;
        $usuario->contraseña = Hash::make($request->contraseña); 
        $usuario->rol_usuario = $request->rol_usuario;   
        $usuario->tdoc_usuario = $request->tdoc_usuario;   

        $usuario-> save()

        Auth::login($usuario);
        
        return redirect(route());

    }

    

    public function login(Request $request){

    }

    public function logout(Request $request){
        auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route(""));
    }
}