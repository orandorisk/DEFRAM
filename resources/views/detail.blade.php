@extends('layout.main')

@section('container')

<article>
    <h2>{{$post->title}}</h2>
    <p>Ditulis oleh <a href="/category/{{$post->category->slug}}">{{$post->category->name}}</a></p>
    <p>{{$post->body}}</p>

    <a href="/blog">Kembali</a>

    @endsection