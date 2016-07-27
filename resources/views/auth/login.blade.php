@extends('layouts.auth')

@section('title', 'Login')

@section('heading', 'Добро пожаловать, войдите!')

@section('content')
    {!! Form::open() !!}

    <div class="form-group">
        {!! Form::label('email') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Пароль') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Войти', ['class' => 'btn btn-primary']) !!}

    <a href="{{ route('auth.password.email') }}" class="small">Забыли пароль?</a>

    {!! Form::close() !!}
@endsection
