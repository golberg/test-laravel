@extends('layouts.backend')

@section('title', $user->exists ? 'Изменить '.$user->name : 'Создать нового пользователя')

@section('content')
    {!! Form::model($user, [
        'method' => $user->exists ? 'put' : 'post',
        'route' => $user->exists ? ['backend.users.update', $user->id] : ['backend.users.store']
    ]) !!}

    <div class="form-group">
        {!! Form::label('Имя') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Пароль') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Повторить пароль') !!}
        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit($user->exists ? 'Сохранить пользователя' : 'Создать нового пользователя', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
@endsection
