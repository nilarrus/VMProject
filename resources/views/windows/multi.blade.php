@extends('layouts.app')

@section('content')
<!-- JQuery -->
<script src="{{ URL::asset('js/Multiplayer.js')}}"></script>

<div class="container">

    <div id="header" class="mb-4">
        <div id="level" class="row mb-0 mt-0">           
            <div class="col text-right">Nivel</div>
            <div id="nivel" class="col text-left">@php echo $_POST["level"];@endphp</div> 
        </div>
        <div class="game centrado">     
            <table id="table" class="table-game">
                
                    <!-- generado por js -->
                
            </table>
        </div>

        <button id="start" class="btn btn-primary" type="button" > Taula </button>
        @php
           $c =  Auth::user()->username ;
        @endphp
        <form action="{{ route('deleteRoom')}}" method="post" id="formReturn" >
            @csrf
            <input type="text" name="nsala" id="nsala" value="{{$_POST["nsala"]}}" hidden><br/>
            <button class="btn btn-dark" type="submit">Borrar sala</button><br/>
        </form>
    </div>
</div>
<script> 
    var c = {{$creador}};
    console.log(c);
    console.log({{$JsonCorrectes}});
    var CCorrectes = {{$JsonCorrectes}};
    var level = parseInt($("#nivel").text());
    $("#start").on("click",function(){
        SGame(CCorrectes,level);
    });
</script>
@endsection