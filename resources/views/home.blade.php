@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                @if(count($posts) > 0)
                <div class="panel-body">
                    <table class="table table-striped">
                      <tr>
                        <th>Title</th>
                        <th></th>
                        <th></th>
                      </tr>
                      @foreach($posts as $post)
                        <tr>
                          <td>{{ $post->title }}</td>
                          <td><a class="btn btn-primary" href="{{route('posts.edit', $post->id)}}">Editar</a></td>
                          <td>
                            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST']) !!}
                              {{ Form::hidden('_method', 'DELETE') }}
                              {{ Form::submit('Deletar', ['class' => 'btn btn-danger']) }}
                            {!! Form::close() !!}
                          </td>
                        </tr>
                      @endforeach
                    </table>
                </div>
                @else
                <div class="panel-body">
                Bem Vindo, você não possui nenhum post ainda!
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
