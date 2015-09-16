@extends('layout')

@section('title')
    Мои задачи
@stop

@section('mainContent')
    <h1>Мои задачи</h1>
    {{--  */ $tasks = \App\Task::where('implementer', '=', 'Петрович')->get() /* --}}
    @foreach($tasks as $task)
        <p>{!! $task->title  !!}</p>
        <p>{!! $task->status  !!}</p>
        <hr>
    @endforeach
@stop