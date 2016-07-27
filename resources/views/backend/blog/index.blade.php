@extends('layouts.backend')

@section('title', 'Записи')

@section('content')
    <a href="{{ route('backend.blog.create') }}" class="btn btn-primary">Создать новую запись</a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Название</th>
                <th>Ссылка</th>
                <th>Автор</th>
                <th>Опубликовано</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr class="{{ $post->published_highlight }}">
                    <td>
                        <a href="{{ route('backend.blog.edit', $post->id) }}">{{ $post->title }}</a>
                    </td>
                    <td>{{ $post->slug }}</td>
                    <td>{{ $post->author->name }}</td>
                    <td>{{ $post->published_date }}</td>
                    <td>
                        <a href="{{ route('backend.blog.edit', $post->id) }}">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('backend.blog.confirm', $post->id) }}">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $posts->render() !!}
@endsection
