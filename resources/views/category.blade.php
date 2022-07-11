@extends('layout.main')

@section('container')

<!-- looping -->
@foreach($post as $p)
<div class="card" style="width: 18rem;">
    <h4>{{$category}}</h4>
    <div class="card-body">
        <a href="/detail/{{$p->slug}}">{{$p->title}}</a>
        <p>{{$p->excerpt}}</p>
    </div>
</div>
@endforeach
<!-- end looping -->

@endsection