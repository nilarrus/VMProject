@extends('layouts.app')

@section('content')
    
<!-- JavaScript -->
<script>
    function formSalaPassword() {
        $(#formSpas).show();
      }
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
                                        <button onclick="formSalaPassword()"> </button>
                                        <a class="btn btn-lg btn-primary" role="button" href="{{ route('multisala')}}">Nueva sala</a>
                                    </p>
                                    <form action="{{ route('multisala')}}" method="post" id="formSpas" >
                                        @csrf
                                        <input type="password" name="spas" id="spas">
                                        <button class="btn btn-lg btn-primary" type="submit">Jugar</button>
                                    </form>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
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