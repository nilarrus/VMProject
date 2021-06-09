@extends('layouts.app')

@section('content')
<!-- JQuery -->
<script src="{{ URL::asset('js/ajaxCalls.js')}}"></script>
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
        <div id="backAjax"></div>
        <button id="start" class="btn btn-primary" type="button" onclick="celesServer('{{$_POST['nsala']}}')" > Call ajax </button>

        @if (Auth::user()->username == $creador)
            <form action="{{ route('deleteRoom')}}" method="post" id="formReturn" >
                @csrf
                <input type="text" name="nsala" id="nsala" value="{{$_POST["nsala"]}}" hidden><br/>
                <button class="btn btn-dark" type="submit">Borrar sala</button><br/>
            </form>
        @endif
        
    </div>
</div>
<script> 
    var level = parseInt($("#nivel").text());
    /*$("#start").on("click",function(){
        SGame(CCorrectes,level);
    });*/
</script>
@endsection