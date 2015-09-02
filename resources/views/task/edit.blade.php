@extends('layout')

@section('title')
    Изменение текущей задачи
@stop

@section('mainContent')
    <h3>{!! $task->title !!} - редактирование задачи</h3>
    {!! Form::model($task, ['method' => 'PATCH', 'action' => ['TaskController@update',$task->id ]] ) !!}

    @include('task.form')
            <!-- Сохранить измения Form submit -->
    <div class="form-group">
        {!! Form::submit('Сохранить измения задачи', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}


    @include('errors.list')
@stop