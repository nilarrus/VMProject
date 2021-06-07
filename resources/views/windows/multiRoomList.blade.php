@extends('layouts.app')

@section('content')
    
<!-- JavaScript -->
<!-- JQuery -->
<script src="{{ URL::asset('js/MultiplayerListRoom.js')}}"></script>

<div class="container">

    <div class="text-center">
        <div id="FormPass" class="FormPass">
            <div id="FPContent">
                <form class="checkPass" id="checkPass" action="{{ route('multiRoomPass')}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label id="lnsala" for="nsala" class="col-form-label"></label>
                        <input type="text" name="nsala" id="nsala" value="" style="display: none">
                    </div>
                    <div class="form-group row">
                        <label id="lcreador" for="creador" class="col-fom-label"></label>
                        <input type="text" name="creador" id="creador" value="" style="display: none">
                    </div>
                    <div class="form-group row">
                        <label for="pass" class="col-fom-label">Contraseña</label>
                        <input type="password" name="pass" id="pass" value="">
                    </div>
                    <input type="text" name="level" id="level" style="display: none" value="1">
                    <div class="form-group row">
                        <button class="btn btn-lg btn-primary" type="submit">Check</button>
                    </div>
                </form>
            </div>
        </div>
        @if($errors->any())
            <div class="alert alert-danger">{{$errors->first()}}</div>
        @endif
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10 lista-salas">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    Lista de salas
                </div>
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
                                       <tr id="rowList">
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
<script>    
    inGameList();
    // display form hidden jquery
    $("#FormPass").css("display", "none");
    
</script>
@endsection