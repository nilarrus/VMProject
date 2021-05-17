@extends('layouts.app')

@section('content')
    
<!-- JavaScript -->
<script>
</script>
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
                                        <button id="show" type="button" class="btn btn-lg btn-primary" onclick="showForm()" > Nueva sala </button>
                                    </p>
                                    <form action="{{ route('multisala')}}" method="post" id="formSpas" style="display: none">
                                        @csrf
                                        <label for="nsala">Nombre de la sala:</label><br/>
                                        <input type="text" name="nsala" id="nsala" value="Pepinos"><br/>
                                        <label for="spas">Password Sala:</label><br/>
                                        <input type="text" name="spas" id="spas" ><br/>
                                        <input type="text" name="user" id="user" hidden value="{{ Auth::user()->username }}">
                                        <button class="btn btn-lg btn-primary" type="submit">Jugar</button><br/>
                                    </form>
                                </div>
                            </div>
                            <div class="row justify-content-md-center lista">
                                <div class="col-md-auto mb-5">
                                    <p class="mb-2">Unirse a sala
                                        <a class="btn btn-lg btn-primary" role="button" href="{{ route('multiRoomList')}}">Lista</a>   
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
    </div>
</div>
@endsection