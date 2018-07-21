@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Benvenuto {{ Auth::user()->name }}</div>

                <div class="card-body ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <a href="/posts/create" class="btn btn-outline-dark float-right">CREA POST</a>
                    <h1>I tuoi Post</h1>
                    @if(count($posts) > 0)
                    <table class="table table-striped">
                            <tr>
                                <th>Titolo</th>
                                <th></th>
                                <th></th>  
                            </tr>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-outline-dark float-right">MODIFICA</a></td>
                                <td> {!!Form::open(['action'=> ['PostsController@destroy', $post->id], 'method'=> 'POST', 'class' => 'float-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('CANCELLA', ['class'=> 'btn btn-outline-danger'])}}
                                        {!!Form::close()!!}</td>  
                            </tr>
                        @endforeach
                    </table>
                    @else 
                        <h5 class="text-center">Non ci sono Post!</h5>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
