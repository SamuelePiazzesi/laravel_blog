@extends('layouts.app');

@section('content')
    <h1>Modifica Post</h1>
    {!! Form::open(['action'=> ['PostsController@update', $post->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Titolo')}}
            {{Form::text('title', $post->title , ['class' => 'form-control', 'placeholder'=> ''])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Post')}}
            {{Form::textarea('body', $post->body, ['id'=> 'article-ckeditor', 'class' => 'form-control', 'placeholder'=> ''])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Conferma', ['class'=> 'btn btn-outline-dark'])}}
{!! Form::close() !!}
@endsection