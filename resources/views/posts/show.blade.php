@extends('layouts.app');


@section('content')
    <a href="/posts" class="btn btn-outline-dark ">INDIETRO</a>
    <h1 class="text-center">{{$post->title}}</h1>
    <div class="p-3">
        {!!$post->body!!}
    </div>
    <hr>
    <small>Data: {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-dark">MODIFICA</a>
    {!!Form::open(['action'=> ['PostsController@destroy', $post->id], 'method'=> 'POST', 'class' => 'float-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('CANCELLA', ['class'=> 'btn btn-outline-danger'])}}
    {!!Form::close()!!}
@endsection