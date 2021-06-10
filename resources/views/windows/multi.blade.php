@extends('layouts.app')

@section('content')
<!-- JQuery -->
<script src="{{ URL::asset('js/Multiplayer.js')}}"></script>
<script src="{{ URL::asset('js/ajaxCalls.js')}}"></script>



<div class="container">

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
                        <p id="gameTime">0</p>
                    </div>
                </div>           
            </div>
            <div class="col">
                <div class="row">
                    <div class="col text-right">
                        <img src="{{URL::asset('img/wrong.png')}}" alt="" width="45" height="45">
                    </div>
                    <div class="col text-left">
                        <p id="gameFails">0</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="game centrado">     
        <table id="table" class="table-game">
            
                <!-- generado por js -->
            
        </table>
    </div>
    <div id="backAjax"></div>
    <button id="start" class="btn btn-primary" type="button" onclick="celesServer('{{$_POST['nsala']}}')" > Call ajax </button>
    <button id="start" class="btn btn-primary" type="button" onclick="playTime()" > timer </button>
    <button id="start" class="btn btn-primary" type="button" onclick="stopInterval()" > stop </button>
    @if (Auth::user()->username == $creador)
        <form action="{{ route('deleteRoom')}}" method="post" id="formReturn" >
            @csrf
            <input type="text" name="nsala" id="nsala" value="{{$_POST["nsala"]}}" hidden><br/>
            <button class="btn btn-dark" type="submit">Borrar sala</button><br/>
        </form>
    @endif
</div>
<script> 
    var level = parseInt($("#nivel").text());
    /*$("#start").on("click",function(){
        SGame(CCorrectes,level);
    });*/
    
</script>
@endsection