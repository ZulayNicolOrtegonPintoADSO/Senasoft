@extends('layouts.app')

@section('content')

    <p class="fs-1 text-center">  CREA TU PERFIL 👇 </p>

    
    <div class="container">
        <form action="{{ route('createProfile') }}" method="POST">
            @csrf
            <div class="row fs-4 fst-italic">

                <div class="col col-sm-12 col-md-6">
                    <div class="mt-2">
                        <div class="row">
                            <div class="col-4">
                                <label for="first_name">First_name</label>
                            </div>
    
                            <div class="col-8">
                                <input type="text" name="first_name" id="first_name" class="form-control">
                            </div>
                        </div>
                    </div>
    

                    <div class="mt-2">
                        <div class="row">
                            <div class="col-4">
                                <label for="last_name">Last_name</label>                               
                            </div>
    
                            <div class="col-8">
                                <input type="text" name="last_name" id="last_name" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="mt-2">
                        <div class="row">
                            <div class="col-4">
                                <label for="phone">Phone</label>                                
                            </div>
    
                            <div class="col-8">
                                <input type="number" name="phone" id="phone" class="form-control">                               
                            </div>
                        </div>
                    </div>

    
                    <div class="mt-2">
                        <div class="row">
                            <div class="col-4">
                                <label for="sexo">Sexo</label>
                            </div>
    
                            <div class="col-8">
                                <input type="text" name="sexo" id="sexo" class="form-control">
                            </div>
                        </div>
                    </div>
    
                    <div class="mt-2">
                        <div class="row">
                            <div class="col-4">
                                <label for="birthdate">Birthdate</label>  
                            </div>
    
                            <div class="col-8">
                                <input type="date" name="birthdate" id="birthdate" class="form-control">
                            </div>
                        </div>
                    </div>
    
                    <div class="mt-2">
                        <div class="row">
                            <div class="col-4">
                                <label for="facebook">Facebook</label>     
                            </div>
    
                            <div class="col-8">
                                <input type="text" name="facebook" id="facebook" class="form-control">                               
                            </div>
                        </div>
                    </div>
    
                    <div class="mt-2">
                        <div class="row">
                            <div class="col-4">
                                <label for="instagram">Instagram</label>      
                            </div>
    
                            <div class="col-8">
                                <input type="text" name="instagram" id="instagram" class="form-control"> 
                            </div>
                        </div>
                    </div>
    
                    <div class="mt-2">
                        <div class="row">
                            <div class="col-4">
                                <label for="linkedin">Linkedin</label>
                            </div>
    
                            <div class="col-8">
                                <input type="text" name="linkedin" id="linkedin" class="form-control">
                            </div>
                        </div>
                    </div>
    
                    <button class="btn btn-success mt-2 form-control" type="submit">Create Profile</button>

                </div>
    
                
                
                <div class="col col-sm-12 col-md-6 bg-dark">
                     x
                </div>

            </div>
     
        </form>   
    </div>   

@endsection 