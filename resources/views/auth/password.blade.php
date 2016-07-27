@extends('layouts.auth')

@section('title', 'Восстановить пароль')

@section('heading', 'Пожалуйста, введите ваш email чтобы восстановить пароль!')

@section('content')
    {!! Form::open() !!}

    <div class="form-group">
        {!! Form::label('email') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Отправить ссылку для сброса пароля', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
@endsection
