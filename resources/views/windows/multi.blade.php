@extends('layouts.app')

@section('content')
<!-- Ajax -->
<script src="{{ URL::asset('js/ajax.js')}}"></script>

<div class="container">

    <div id="header" class="mb-4">
        <div class="game centrado">     
            <table id="table" class="table-game">
                
                    <!-- generado por js -->
                
            </table>
        </div>

        <button class="btn btn-primary" type="button" onclick="SGame({{$JsonCorrectes}})"> Start</button>
        <form action="{{ route('deleteRoom')}}" method="post" id="formReturn" >
            @csrf
            <input type="text" name="nsala" id="nsala" value="{{$_POST["nsala"]}}" hidden><br/>
            <button class="btn btn-dark" type="submit">Return</button><br/>
        </form>
    </div>
    <div id="info_user" class="row mb-0 mt-0">
        <div id="Email"> {{$_POST["user"]}} </div><br>
        <div id="NSala">{{$_POST["nsala"]}}</div><br>
        <div id="Password">{{$_POST["spas"]}}</div><br>
    </div>
</div>
<script> 
    var test = {{$JsonCorrectes}};
    console.log(test); 
</script>
@endsection