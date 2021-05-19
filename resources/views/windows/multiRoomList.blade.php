@extends('layouts.app')

@section('content')
    
<!-- JavaScript -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 lista-salas">
            <div class="card">
                <div class="card-header bg-dark text-white">Lista de Salas en espera</div>
                <div class="card-body bg-secondary text-white">
                    <div class="container">
                        <div class="col-md-12 text-center">
                            <div class="row justify-content-md-center"> <!-- lista salas en espera -->
                                <div class="header text-center">
                                </div>
                                <table class="table table-striped table-dark">
                                    <thead>
                                    <tr>
                                       <th scope="col">Numero de sala</th>
                                       <th scope="col">Creador</th>
                                    </tr>
                                    </thead>
                                    <tbody>                    
                                       @foreach($salas as $sala)
                                       <tr>
                                           <td>{{ $sala->NSala }}</td>
                                           <td>{{ $sala->username }}</td>                        
                                       </tr>
                                       @endforeach
                                    </tbody>
                                 </table>
                                 {{$salas->links()}}
                            </div>                            
                            <div class="row justify-content-md-rigth">
                                <div class="col-md-auto mb-5">
                                    <form action="{{ route('multiMenu')}}" method="post" id="formReturn">
                                        @csrf
                                        <button class="btn btn-dark" type="submit">Atras</button><br/>
                                    </form>
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