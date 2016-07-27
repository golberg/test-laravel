@extends('layouts.backend')

@section('title', 'Удалить '.$page->title)

@section('content')
    {!! Form::open(['method' => 'delete', 'route' => ['backend.pages.destroy', $page->id]]) !!}
        <div class="alert alert-danger">
            <strong>Внимание!</strong> Вы собираетесь удалить страницу. Это действие невозможно будет вернуть. Хотите продолжить?
        </div>

        {!! Form::submit('Да, удалить страницу!', ['class' => 'btn btn-danger']) !!}

        <a href="{{ route('backend.pages.index') }}" class="btn btn-success">
            <strong>Нет, уйти отсюда!</strong>
        </a>
    {!! Form::close() !!}
@endsection
