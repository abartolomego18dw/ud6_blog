@extends('layouts.template')

@section('content')
<table class="table"> 
<thead class="thead-dark">
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Rol</th>
        <th scope="col">Editar</th>
    </thead>
    @foreach($users as $user)
    <tbody>
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role_id}}</td>
        <td>
          <a title="Editar" href="{{route('edit',$user->id)}}"><i class="fas fa-pencil-alt" style="color:black"></i></a>
        </td>
    </tr>
    </tbody>
    @endforeach
</table>
@endsection