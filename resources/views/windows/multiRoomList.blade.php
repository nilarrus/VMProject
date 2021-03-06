@extends('layouts.app')

@section('content')
    
<!-- JavaScript -->
<!-- JQuery -->
<script src="{{ URL::asset('js/MultiplayerListRoom.js')}}"></script>

<div class="container">

    <div class="row justify-content-center text-center">
        <div id="FormPass" class="FormPass" style="display: none">
            <div id="FPBack">         
                <div id="FPContent">
                    <form class="checkPass " id="checkPass" action="{{ route('multiRoomPass')}}" method="post" >
                        @csrf
                        <div class="row ">
                            <div class="col-auto">
                                <div>Sala</div>
                            </div>
                            <div class="col-auto">
                                <div id="lnsala"></div>
                            </div>
                        </div>
                        <div class="row ">    
                            <div class="col-auto">
                                <div>Creador</div>
                            </div>
                            <div class="col-auto">
                                <div id="lcreador"></div>
                            </div>
                        </div>
                        <input type="text" name="nsala" id="nsala" value="" style="display: none">
                        <input type="text" name="creador" id="creador" value="" style="display: none">
                        <div class="form-group">
                            <label for="pass" class="col-form-label">Contraseña: </label>
                            <input type="password" class="form-control" name="pass" id="pass" value="" required  autofocus>
                        </div>
                        <input type="text" name="level" id="level" style="display: none" value="1">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <button class="btn btn-lg btn-primary" type="submit">Check</button>
                            </div>
                            <div class="col-auto">
                                <button id="passcheckout" class="btn btn-lg btn-primary" type="button">Back</button>
                            </div>
                            
                        </div>
                    </form>
                </div>
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
                                <table class="table table-hover table-dark">
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
    
    $("#passcheckout").on("click", function () {
        $("#FormPass").css("display", "none");
    });
    
</script>
@endsection