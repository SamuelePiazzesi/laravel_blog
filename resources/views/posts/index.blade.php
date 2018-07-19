@extends('layouts.app');

@section('content')
    <h1>Post</h1>
    @if(count($posts) > 0) 
        @foreach($posts as $post)
            <div class="card">
                <div class="card-body">
                        <h3 class="card-title">
                                <a href="/posts/{{$post->id}}">
                                {{$post->title}}
                            </a>
                        </h3>
                    <small>Data creazione; {{$post->created_at}}</small>
                </div>
                
            </div>
        @endforeach
        {{{--  'pagination'  --}}}
        {{$posts->links()}}
    @else
        <p>Nessun Post </p>
    @endif
@endsection