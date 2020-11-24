@extends('layouts.app')

@section('content')
<!-- JavaScript -->
<script src="{{ URL::asset('js/efects.js')}}"></script>
<script src="{{ URL::asset('js/general.js')}}"></script>

<div class="container">
    
    <div class="text-center">
        <div id="Fin" class="gameEnd"> 
        <div id="content">
            <div class="row cajaFin">
                <div class="col">
                    <div id="InfoGame" class="row">
                        <div class="col">
                            <p id="levelGame"></p>
                        </div>
                        <div class="col">
                            <p id="timeGame"></p>
                        </div>
                        <div class="col">
                            <p id="failsGame"></p>
                        </div>
                    </div>
                    <!-- <div id="InfoTopPlayer" class="row">
                        <div class="col">
                            <p>Record:</p>
                        </div>
                        <div class="col">
                            <p id="levelTopP">Nivel</p>
                        </div>
                        <div class="col">
                            <p id="timeTopP">Time</p>
                        </div>
                        <div class="col">
                            <p id="failsTopP">Fails</p>
                        </div>
                    </div>-->
                    <div class="row">
                        <div class="col">
                            <form action="{{ route('gp1')}}" method="post">
                                @csrf
                                <input type="text" name="level" id="" hidden value={{ intval($_POST["level"])+1}}>
                                <input type="text" name="time" id="" hidden value="0">
                                <input type="text" name="fail" id="" hidden value="0">
                                <button class="btn btn-lg btn-primary" type="submit">NEXT</button>
                            </form>
                            
                        </div>
                        <div class="col">
                            <a class="btn btn-lg btn-primary" target="_blank" href="{{route('rank')}}" role="button">
                                Ranking Global
                                <img id="icon" src="{{URL::asset('img/newWindowIcon.png')}}" alt="">
                            </a>
                            
                    </div>
                        </div>
                        <div class="col">
                            <form action="{{ route('store')}}" method="post">
                                @csrf
                                <input type="text" name="username" id="uStore" hidden value="0">
                                <input type="text" name="level" id="nStore" hidden value={{ intval($_POST["level"])+1}}>
                                <input type="text" name="time" id="tStore" hidden value="0">
                                <input type="text" name="fail" id="fStore" hidden value="0">
                                <input type="text" name="menu" id="mStore" hidden value="menu">
                                <button class="btn btn-lg btn-primary" type="submit">Guardar y Volver al menu</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="header" class="mb-4">
        <div id="level" class="row mb-0 mt-0">           
            <div class="col text-right">Nivel</div>
            <div id="nivel" class="col text-left">@php echo $_POST["level"];@endphp</div> 
        </div>
        <div class="row mt-0 mb-0">
            <div class="col">
                <div class="row">
                    <div class="col text-right">
                        <img src="{{URL::asset('img/clock.png')}}" alt="" width="45" height="45">
                    </div>
                    <div class="col text-left">
                        <p id="gameTime"> @php echo $_POST["time"];@endphp </p>
                    </div>
                </div>           
            </div>
            <div class="col">
                <div class="row">
                    <div class="col text-right">
                        <img src="{{URL::asset('img/wrong.png')}}" alt="" width="45" height="45">
                    </div>
                    <div class="col text-left">
                        <p id="gameFails">@php echo $_POST["fail"];@endphp</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <div id="Inicio" class="gameStart">
        <div id="content">
            <h1>¡EMPEZAMOS!</h1>
            <button class="btn btn-lg btn-primary btn-block" onclick="startGame(@php echo $_POST['level'];@endphp+2)">Go</button>
            <p> Se mostraran los cuadrados que tienes que recordar</p>
            <p> quando el borde este en Verde empieza la partida</p>
            <p> selecciona todos los quadrados marcados en verde  en el menor tiempo posible</p>
            <p> las celdas erroneas se marcan en rojo unos instantes</p>
        </div>
    </div>
    <div class="game centrado">     
        <table id="table" class="table-game">
            
                <!-- generado por js -->
            
        </table>
    </div>        
</div>
<script> window.onload = function()
    {
        var nivel = parseInt($('#nivel').text());
        
        var Nceles = nivel+2;
        generarTables(Nceles,Nceles);
        
        //Mostramos el overlay inicial y quitamos el final.
        off("Fin");
        on("Inicio");
        
    }
</script>
@endsection