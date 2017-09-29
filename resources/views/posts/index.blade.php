@extends('layouts.app')

@section('content')
<h1>Publicações</h1>
  @if(count($posts) > 0)
    @foreach($posts as $post)
    <div class="well">
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <img style="width: 100%" src="/storage/images/{{$post->cover_image}}">
          </div>
          <div class="col-md-8 col-sm-8">
            <h3 class="card-title"><a href="{{ route('posts.show', $post->id) }}">{{$post->title}}</a></h3>
            <small>Escrito em {{ $post->created_at->format('d-m-Y')}} por {{$post->user->name}}</small>
          </div>
        </div>
    </div>
    <br>
    @endforeach
    {{ $posts->links() }}
  @else
    <h3>Nenhuma postagem no momento :(</h3>
  @endif
@endsection
