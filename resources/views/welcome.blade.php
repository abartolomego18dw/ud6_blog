@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
      <!-- Post Content Column -->
      <div class="col-lg-8">
        <!-- Title -->
        @foreach($posts as $post)
        <h1 class="mt-4">{{$post->title}}</h1>
        <!-- Author -->
        <p class="lead">
          by
          <a href="#">Post user</a>
        </p>
        <hr>
        <!-- Date/Time -->
        <p>Posted on {{$post->published_at}}</p>
        <hr>
        <!-- Preview Image -->
        @if($post->image)
        <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">
        <hr>
        @endif
        <!-- Post Content -->
        <p class="lead">
       
        <blockquote class="blockquote">
          <p class="mb-0"></p>
            {{$post->body}}
        </blockquote>
        @endforeach
        
        <hr>
      </div>
      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">
        
        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                @foreach($categorias as $categoria)
                  <li>
                    <a href="#">{{$categoria->name}}</a>
                  </li>
                  @endforeach
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- /.row -->
  </div>
@endsection