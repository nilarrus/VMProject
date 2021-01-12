@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white">Menu Principal</div>

                <div class="card-body bg-secondary text-white">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                        <div class="col-md-12 text-center">
                            <div class="row justify-content-md-center">
                                <div class="col-md-auto mb-5">
                                    <p class="mb-2">Solo contra infinitos niveles <br>
                                        Demuestra que puedes, recuerda todas las celdas y gana</p>
                                    <form action="{{ route('gp1')}}" method="post">
                                        @csrf
                                        <input type="text" name="level" id="" hidden value="1">
                                        <input type="text" name="time" id="" hidden value="0">
                                        <input type="text" name="fail" id="" hidden value="0">
                                        <button class="btn btn-lg btn-primary" type="submit">Un Jugador</button>
                                    </form>
                                </div>
                            </div>
                            
                            <div class="row justify-content-md-center">
                                <div class="col-md-auto mb-5">
                                    <p class="mb-2">El que gane mas rapido sobrevive <br>
                                         El que no cae<br>
                                         El ultimo se lleva la gloria
                                        </p>
                                        <form action="{{ route('multi')}}" method="post">
                                            @csrf
                                            <input type="text" name="level" id="" hidden value="1">
                                            <input type="text" name="time" id="" hidden value="0">
                                            <input type="text" name="fail" id="" hidden value="0">
                                            <button class="btn btn-lg btn-primary" type="submit">Multijugador</button>
                                        </form>
                                </div>
                            </div>
                            
                            <!--
                            <div class="row justify-content-md-center">
                                <div class="col-md-auto mb-5">
                                    <p class="mb-2">Mapas no incluidos en un jugador por su dificultad, entre otras cosas</p>
                                    <a class="btn btn-lg btn-info disabled" href="#" role="button" aria-disabled="true">Mapas adicionales</a>
                                </div>
                            </div>
                            -->
                            <div class="row justify-content-md-center">
                                <div class="col-md-auto mb-5">
                                    <p class="mt-2 mb-2">© 2020-2021</p>
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
