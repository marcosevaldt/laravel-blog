@extends('layouts.app')

@section('content')
  <h1>Criar Postagem</h1>
  {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
      {{ Form::label('title', 'Título')}}
      {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Título'])}}
    </div>
    <div class="form-group">
      {{ Form::label('body', 'Descrição')}}
      {{ Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Corpo da Mensagem'])}}
    </div>
    <div class="form-group">
      {{ Form::file('cover_image')}}
    </div>
    {{ Form::submit('Criar', ['class' => 'btn btn-primary'])}}
  {!! Form::close() !!}
@endsection
