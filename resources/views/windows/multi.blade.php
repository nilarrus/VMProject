@extends('layouts.app')

@section('content')
<!-- Ajax -->
<script src="{{ URL::asset('js/ajax.js')}}"></script>

<div class="container">

    <div id="header" class="mb-4">
        <div id="level" class="row mb-0 mt-0">           
            <div id="tempMis1" class="col text-right">Nivel1</div>
            <div id="tempMis2" class="col text-right">Nivel2</div>
        </div>
        <div id="info_user" class="row mb-0 mt-0">
            <div id="Email"> {{$_POST["user"]}} </div>
            <div id="NSala">{{$_POST["nsala"]}}</div>
            <div id="Password">{{$_POST["spas"]}}</div>
        </div>
    <!-- <form action="{{ route('deleteRoom')}}" method="post" id="formSpas" style="display: none">
            @csrf
            <input type="text" name="nsala" id="nsala" value="Pepinos"><br/>
            <input type="text" name="spas" id="spas" ><br/>
            <input type="text" name="user" id="user" hidden value="">
            <button class="btn btn-lg btn-primary" type="submit">Jugar</button><br/>
        </form>
    -->
    </div>
    
</div>
<script> StartFunction() </script>
@endsection