@extends('layouts.app');


@section('content')
    <a href="/posts" class="btn btn-outline-dark ">INDIETRO</a>
    <h1 class="text-center">{{$post->title}}</h1>
    <div class="p-3">
        {{$post->body}}
    </div>
    <hr>
    <small>Data: {{$post->created_at}}</small>
@endsection