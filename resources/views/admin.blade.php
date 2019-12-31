@extends('layouts.template')

@section('content')
<table class="table"> 
<thead class="thead-dark">
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Fecha de registro</th>
    </thead>
    @foreach($users as $user)
    <tbody>
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->created_at}}</td>
    </tr>
    </tbody>
    @endforeach
</table>
@endsection