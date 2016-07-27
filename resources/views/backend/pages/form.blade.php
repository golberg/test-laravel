@extends('layouts.backend')

@section('title', $page->exists ? 'Изменить '.$page->title : 'Создать новую страницу')

@section('content')
    {!! Form::model($page, [
        'method' => $page->exists ? 'put' : 'post',
        'route' => $page->exists ? ['backend.pages.update', $page->id] : ['backend.pages.store']
    ]) !!}

    <div class="form-group">
        {!! Form::label('Название') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('uri', 'ЧПУ') !!}
        {!! Form::text('uri', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Имя') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}

        <p class="help-block">
            Это имя используется для генерации ссылки на страницу.
        </p>
    </div>

    <div class="form-group row">
        <div class="col-md-12">
            {!! Form::label('Шаблон') !!}
        </div>
        <div class="col-md-4">
            {!! Form::select('template', $templates, null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-12">
            {!! Form::label('Сортировка') !!}
        </div>
        <div class="col-md-2">
            {!! Form::select('order', [
                '' => '',
                'before' => 'До',
                'after' => 'После',
                'childOf' => 'Дочерний элемент'
            ], null, ['class' => 'form-control']) !!}
        </div>
        <div class="col-md-5">
            {!! Form::select('orderPage', [
                '' => ''
            ] + $orderPages->lists('padded_title', 'id')->toArray(), null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('Контент') !!}
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    </div>

    <div class="checkbox">
        <label>
            {!! Form::checkbox('hidden') !!}

            Убрать страницу из навигации

            <span class="help-block">
                Поставив здесь галочку вы уберете страницу из навигации. Возможно применение только к страницам без дочерних элементов.
            </span>
        </label>
    </div>

    {!! Form::submit($page->exists ? 'Сохранить страницу' : 'Создать новую страницу', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

    <script>
        new SimpleMDE().render();
    </script>
@endsection
