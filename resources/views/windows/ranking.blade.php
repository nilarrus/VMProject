@extends('layouts.app')

@section('content')

<div class="container">
    <div class="header text-center">
        <h2 class="titulo">Ranking</h2>
    </div>
    <table class="table table-striped table-dark">
        <thead>
        <tr>
           <th scope="col">Username</th>
           <th scope="col">Tiempo</th>
           <th scope="col">Fallos</th>
           <th scope="col">Nivel mas alto</th>
        </tr>
        </thead>
        <tbody>
           @foreach($users as $user)
           <tr>
               <td>{{ $user->username }}</td>
               <td>{{ $user->time }}</td>
               <td>{{ $user->fails }}</td>
               <td>{{ $user->Lastlevel }}</td>
           </tr>
           @endforeach
        </tbody>
     </table>
     {{$users->links()}}
    
</div>


@endsection