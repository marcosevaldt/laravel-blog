@extends('layouts.app')

@section('content')
  <h1>Editar Postagem</h1>
  {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
      {{ Form::label('title', 'Título')}}
      {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Título'])}}
    </div>
    <div class="form-group">
      {{ Form::label('body', 'Descrição')}}
      {{ Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Corpo da Mensagem'])}}
    </div>
    <div class="form-group">
      {{ Form::file('cover_image')}}
    </div>
    {{ Form::hidden('_method', 'PUT') }}
    {{ Form::submit('Editar', ['class' => 'btn btn-primary'])}}
  {!! Form::close() !!}
@endsection
