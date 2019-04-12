@extends('layouts.app')
@section('content')
<div class="jumbotron">
    <div class="d-flex justify-content-center"><h1 class="display-4">Doctype Nepal</h1></div>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <p class="lead">
    <center>
        <span><a href="{{route('login')}}"><button class="btn btn-primary">Login</button></a></span>
        <span><a href="{{route('register')}}"><button class="btn btn-primary">Register</button></a></span>
    </center>
    </p>
  </div>
@endsection