@extends('layouts.app')

@section('content')

    <p class="fs-1 text-center fw-bolder"> AQUÍ TU PERFIL 👇 </p>                                     

    <div class="container">
        <div class="row text-center">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col"> Dato </th>
                        <th scope="col"> Valor </th>
                        <th scope="col"> Opción </th>    
                    </tr>
                </thead>
    
                <tbody>
                    <tr>
                        <th scope="col"> Id </th>
                        <td> {{ $usuario->id }} </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Editar✍️
                            </button>
                        </td>
                    </tr>
                    
                    <tr>
                        <th scope="col"> Correo </th>
                        <td> {{ $usuario->email }} </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Editar✍️
                            </button>
                        </td>
                    </tr>
    
                    <tr>
                        <th scope="col"> Nombre </th>
                        <td> {{ $perfil->first_name }} </td> 
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Editar✍️
                            </button>
                        </td>
                    </tr>
    
                    <tr>
                        <th scope="col"> Apellido </th>
                        <td> {{ $perfil->last_name }} </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Editar✍️
                            </button>
                        </td>
                    </tr>
    
                    <tr>
                        <th scope="col"> Celular </th>
                        <td> {{ $perfil->phone }} </td>  
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Editar✍️
                            </button>
                        </td>
                    </tr>
    
                    <tr>
                        <th scope="col"> Sexo </th>
                        <td> {{ $perfil->sexo }} </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Editar✍️
                            </button>
                        </td>
                    </tr>
    
                    <tr>
                        <th scope="col"> Cumpleaños </th>
                        <td> {{ $perfil->birthdate }} </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Editar✍️
                            </button>
                        </td>
                    </tr>
    
                    <tr>
                        <th scope="col"> Facebook </th>
                        <td> {{ $perfil->facebook }} </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Editar✍️
                            </button>
                        </td>
                    </tr>
    
                    <tr>
                        <th scope="col"> Instagram </th>
                        <td> {{ $perfil->instagram }} </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Editar✍️
                            </button>
                        </td>
                    </tr>
    
                    <tr>
                        <th scope="col"> Linkendin </th>          
                        <td> {{ $perfil->linkedin }} </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Editar✍️
                            </button>
                        </td>
                    </tr>               
    
                </tbody>
            </table> 
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="#" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">ESTAS EDITANDO TU PERFIL</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="input-group input-group-lg">
                            <span class="input-group-text" id="" >Nombre</span>
                            <input type="text" class="form-control" name="" id="">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <div class="col-12 text-center">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            <form action="{{ route('createProfile') }}" method="POST">
        </div>
    </div>

@endsection 