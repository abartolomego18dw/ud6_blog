@extends('layouts.template')
@section('content')
<form action="{{route('update', $users->id)}}" method="POST">
@method('PUT')
@csrf
<label>Rol:</label><input type="text" name="rol" value="{{$users->role_id}}">
<br>
<button type="submit">Modificar</button>
</form>
@endsection