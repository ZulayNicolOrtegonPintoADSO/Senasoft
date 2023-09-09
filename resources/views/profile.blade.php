@extends('layouts.app')

@section('content')

    <p class="fs-1 text-center fw-bolder"> AQUÍ TU PERFIL 👇 </p>                                     

    <div class="">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col"> Id </th>
                    <th scope="col"> Correo </th>
                    <th scope="col"> Nombre </th>
                    <th scope="col"> Apellido </th>
                    <th scope="col"> Celular </th>
                    <th scope="col"> Sexo </th>
                    <th scope="col"> Cumpleaños </th>
                    <th scope="col"> Facebook </th>
                    <th scope="col"> Instagram </th>
                    <th scope="col"> Linkendin </th>
                    
                </tr>
            </thead>
            <tbody>
                                
                <tr>
                    <th scope="row"> {{ $usuario->id }} </th>
                    <td> {{ $usuario->email }} </td>
                    <td> {{ $perfil->first_name }} </td> 
                    <td> {{ $perfil->last_name }} </td>
                    <td> {{ $perfil->phone }} </td>  
                    <td> {{ $perfil->sexo }} </td>
                    <td> {{ $perfil->birthdate }} </td>
                    <td> {{ $perfil->facebook }} </td>
                    <td> {{ $perfil->instagram }} </td>
                    <td> {{ $perfil->linkedin }} </td>

                </tr>

            </tbody>
        </table> 
    </div>

@endsection 