<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class CreateProfile extends Controller
{
    public function saveDates(Request $request){
        
        /*VALIDO LOS DATOS DEL FORMULARIO */

        $request->validate([
            'first_name' =>	'required|string|max:100',
            'last_name'	=> 'required|string|max:100',
            'phone' => 'required|string|max:100',
            'sexo' => 'required|in:hombre,mujer,otro',
            'birthdate'	=> 'required|date',
            'facebook' =>	'required|string|max:100',
            'instagram'	=> 'required|string|max:100',
            'linkedin' => 'required|string|max:100',
        ]);

        /*PARA CREAR UN NUEVO PERFIL Y ASIGNAR LOS DATOS: */
        $perfil = new Profile();

        $perfil->first_name = $request->first_name;
        $perfil->last_name = $request->last_name;
        $perfil->phone = $request->phone;
        $perfil->sexo = $request->sexo;
        $perfil->birthdate = $request->birthdate;
        $perfil->facebook = $request->facebook;
        $perfil->instagram = $request->instagram;
        $perfil->linkedin = $request->linkedin;
        $perfil->user_id = Auth()->user()->id;

        // Guardar el perfil en la base de datos
        $perfil->save();
        

        $perfil = Auth()->user()->profile;
        $usuario = Auth()->user();

        
        return $perfil ? view('profile', compact('perfil', 'usuario')): view('notProfile');

    }
}
