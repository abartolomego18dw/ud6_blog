@extends('layouts.app')

@section('content')
<form action="post.update" method="PUT">
@include('posts._form')
</form>
@endsection