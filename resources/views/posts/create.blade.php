@extends('layouts.app');

@section('content')
    <h1>Creazione Post</h1>
    {!! Form::open(['action'=> 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Titolo')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder'=> ''])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Post')}}
            {{Form::textarea('body', '', ['id'=> 'article-ckeditor', 'class' => 'form-control', 'placeholder'=> ''])}}
        </div>
        {{Form::submit('Crea il Post', ['class'=> 'btn btn-outline-dark'])}}
{!! Form::close() !!}
@endsection