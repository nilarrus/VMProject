@extends('layouts.app')

@section('content')
    
<!-- JavaScript -->
<!-- JQuery -->
<script src="{{ URL::asset('js/MultiplayerListRoom.js')}}"></script>

<!-- Ajax -->
<script src="{{URL::asset('js/ajax.js')}}"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 lista-salas">
            <div>
                <form class="checkPass" id="checkPass" action="{{ route('multiRoomPass')}}" method="post" hidden >
                    @csrf
                    <input type="text" name="nsala" id="nsala" value="">
                    <input type="text" name="creador" id="creador" value="">
                    <button class="btn btn-lg btn-primary" type="submit">Check</button>
                </form>
            </div>
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
                                @php
                                    var_dump($salas);
                                    if(empty($salas->NSala)){
                                        echo "True";
                                    }else{
                                        echo "false";
                                    }
                                @endphp
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
</script>
@endsection