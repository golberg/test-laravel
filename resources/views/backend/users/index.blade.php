@extends('layouts.backend')

@section('title', 'Пользователи')

@section('content')
    <a href="{{ route('backend.users.create') }}" class="btn btn-primary">Создать нового пользователя</a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Имя</th>
                <th>E-mail</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>
                        <a href="{{ route('backend.users.edit', $user->id) }}">{{ $user->name }}</a>
                    </td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('backend.users.edit', $user->id) }}">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('backend.users.confirm', $user->id) }}">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $users->render() !!}
@endsection
