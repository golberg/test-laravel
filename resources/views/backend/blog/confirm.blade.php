@extends('layouts.backend')

@section('title', 'Удалить '.$post->title)

@section('content')
    {!! Form::open(['method' => 'delete', 'route' => ['backend.blog.destroy', $post->id]]) !!}
        <div class="alert alert-danger">
            <strong>Внимание!</strong> Вы собираетесь удалить сообщение. Это действие нельзя будет отменить. Вы, уверены, что хотите это сделать?
        </div>

        {!! Form::submit('Да, удалить этот пост!', ['class' => 'btn btn-danger']) !!}

        <a href="{{ route('backend.blog.index') }}" class="btn btn-success">
            <strong>Нет, уйти отсюда!</strong>
        </a>
    {!! Form::close() !!}
@endsection
