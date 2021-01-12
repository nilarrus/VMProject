@extends('layouts.app')

@section('content')
<!-- JavaScript -->
<script src="{{ URL::asset('js/efects.js')}}"></script>
<script src="{{ URL::asset('js/general.js')}}"></script>

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
    
</div>

@endsection