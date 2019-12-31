@extends('layouts.app')

@section('content')
<form action="{{route('posts.store')}}" method="POST">
@csrf
<label>Title</label>
    <input type="text" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : ''}}" placeholder="Enter title" >
    {!! $errors->first('title','<span class="invalid-feedback ">:message</span>') !!}
</div>
<div class="form-group">
    <label>Description</label>
    <textarea name="excerpt" class="form-control {{ $errors->has('excerpt') ? 'is-invalid' : ''}}" placeholder="Enter Excerpt"></textarea>
    {!! $errors->first('excerpt','<span class="invalid-feedback ">:message</span>') !!}
</div>
<div class="form-group">
    <label class="control-label" for="inputError">Body</label>
    <textarea rows="5" name="body" class="form-control {{ $errors->has('body') ? 'is-invalid' : ''}}" placeholder="Enter Body"></textarea>
    {!! $errors->first('body','<span class="invalid-feedback ">:message</span>') !!}
</div>
<div class="form-group">
    <label>Image</label>
    <input type="file" name="img" class="form-control {{ $errors->has('img') ? ' is-invalid' : '' }}">
    {!! $errors->first('img','<span class="invalid-feedback "><strong>:message</strong></span>') !!}
</div>
<div class="form-group">
    <label class="control-label" for="inputError">Categoria del 1-6</label>
    <input type="number" name="categoria"><br>
</div>
<button type="submit" class="btn btn-secondary">Enviar</button>
</form>
@endsection 