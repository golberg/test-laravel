@extends('layouts.backend')

@section('title', 'Удалить '.$user->name)

@section('content')
    {!! Form::open(['method' => 'delete', 'route' => ['backend.users.destroy', $user->id]]) !!}
        <div class="alert alert-danger">
            <strong>Внимание!</strong> Вы собираетесь удалить пользователя. Это действие не может быть возвращено. Вы действительно хотите продолжить?
        </div>

        {!! Form::submit('Да, удалить пользователя!', ['class' => 'btn btn-danger']) !!}

        <a href="{{ route('backend.users.index') }}" class="btn btn-success">
            <strong>Нет, уйти отсюда!</strong>
        </a>
    {!! Form::close() !!}
@endsection
