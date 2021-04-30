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
        
    </div>
    
</div>

@endsection