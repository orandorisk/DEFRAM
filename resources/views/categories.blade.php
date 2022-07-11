@extends('layout.main')

@section('container')

<h1 class="mb-5">Post Category : </h1>
@foreach($categories as $c)
<div class="card" style="width: 18rem;">
    <h4>{{$c->name}}</h4>
    <div class="card-body">
        <a href="/category/{{$c->slug}}">{{$c->name}}</a>
    </div>
    @endforeach
    @endsection