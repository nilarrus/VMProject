@extends('layouts.app')

@section('content')
    
<!-- JavaScript -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white">Multijugador</div>
                <div class="card-body bg-secondary text-white">
                    <div class="container">
                        <div class="col-md-12 text-center">
                            <div class="row justify-content-md-center">
                                <div class="col-md-auto md-5">
                                    <p class="mb-2">Crear Sala 
                                        <button class="btn btn-lg btn-primary">Nueva sala</button>
                                    </p>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col-md-auto mb-5">
                                    <p class="mb-2">Unirse a sala
                                        <button class="btn btn-lg btn-primary">Lista</button>
                                    </p>
                                </div>
                            </div>
                            <div class="row justify-content-md-rigth">
                                <div class="col-md-auto mb-5">
                                    <a class="btn btn-dark" role="button" href="{{ route('menu') }}"> Atras </a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-10 lista-salas">
            <div class="card">
                <div class="card-header bg-dark text-white">Lista de Salas en espera</div>
                <div class="card-body bg-secondary text-white">
                    <div class="container">
                        <div class="col-md-12 text-center">
                            <div class="row justify-content-md-center"> <!-- lista salas en espera -->
                                <div class="header text-center">
                                    <h2 class="titulo">Lista</h2>
                                </div>
                                <table class="table table-striped table-dark">
                                    <thead>
                                    <tr>
                                       <th scope="col">Numero de sala</th>
                                       <th scope="col">Numero de juegadores en la sala</th>
                                       <th scope="col">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>test numero 1</td>
                                            <td>test numero jugadores 3</td>         
                                            <td>test Jugando</td>                
                                        </tr>
                                       <?php 
                                       /*@foreach($users as $user)
                                       <tr>
                                           <td>{{ $user->username }}</td>
                                           <td>{{ $user->time }}</td>         
                                           <td>{{ $user-> }}</td>                
                                       </tr>
                                       @endforeach */
                                       ?>
                                    </tbody>
                                 </table>
                                 <?php /*{{$users->links()}}*/ ?>
                            </div>
                            
                            <div class="row justify-content-md-rigth">
                                <div class="col-md-auto mb-5">
                                    <a class="btn btn-dark" role="button" href="{{ route('menu') }}"> Atras </a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection