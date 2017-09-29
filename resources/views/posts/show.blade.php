@extends('layouts.app')

@section('content')
  <a href="{{ route('posts.index') }}" class="btn btn-primary">Voltar</a>
  <h1>{{$post->title}}</h1>
  <p>Criado em {{$post->created_at->format('d-m-Y')}} por {{$post->user->name}}</p>
  <div>
    <p>{!! $post->body !!}</p>
  </div>
  <hr>
  @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
      <a class="btn btn-primary" href="{{ route('posts.edit', $post->id) }}">Editar</a>
      {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Deletar', ['class' => 'btn btn-danger']) }}
      {!! Form::close() !!}
    @endif
  @endif
@endsection
