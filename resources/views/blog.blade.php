@extends('layout.main')

@section('container')

<!-- looping -->
@foreach($post as $p)
<div class="card" style="width: 18rem;">
    <h4>{{$p->title}}</h4>
    <div class="card-body">
        <p class="card-text">{{$p->excerpt}}</p>
        <p>Ditulis oleh <a href="/category/{{$p->category->slug}}">{{$p->category->name}}</a></p>
        <a href="/detail/{{$p->slug}}" class="btn btn-primary">Detail</a>
    </div>
</div>
@endforeach
<!-- end looping -->

@endsection