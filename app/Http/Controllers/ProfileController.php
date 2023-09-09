<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function show(){

        $perfil = Auth()->user()->profile;
        $usuario = Auth()->user();
        //Auth() comprueba si un usuario ha iniciado sesión en la aplicación web. 
        
        // dd($usuario);
        return $perfil ? view('profile', compact('perfil', 'usuario')): view('notProfile');

    }
}
