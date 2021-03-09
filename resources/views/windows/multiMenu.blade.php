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
                                        <button class="btn btn-lg btn-primary">+</button>
                                    </p>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col-md-auto mb-5">
                                    <p class="mb-2">Unirse a sala
                                        <button class="btn btn-lg btn-primary">-</button>
                                    </p>
                                </div>
                            </div>
                            <div class="row justify-content-md-rigth">
                                <div class="col-md-auto mb-5">
                                    <button class="mt mb-2">Back</button>
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