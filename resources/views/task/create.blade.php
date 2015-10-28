@extends('layout')

@section('title')
    Создание новой задачи
@stop

@section('mainContent')
    <h3>Создание новой задачи</h3>
    @include('errors.list')
    {!! Form::open(['url' => 'task'])  !!}

    @include('task.form')
            <!-- Сохранить измения Form submit -->
    <div class="form-group">
        {!! Form::submit('Создать новую задачу', ['class' => 'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}
@stop