@extends('layout')

@section('title')
    Отображение текущих задач
@stop

@section('mainContent')
    <h1>Текущие задачи</h1>
    @if($tasks)
        <table class="table table-bordered">
            <tr>
                <th width="30%">Название</th>
                <th width="50%">Описание</th>
                <th width="20%">Дата создания</th>
            </tr>
        @foreach($tasks as $task)
            <tr>
                <td><a href="task\{{ $task->id }}">{{ $task->title }}</a></td>
                <td> {{ str_limit($task->description, 50) }}</td>
                <td>{{ DATE_FORMAT($task->created_at,"d.m.y") }}</td>
            </tr>
        @endforeach
        </table>
    @else
        <h3>В данный момент нет задач!</h3>
    @endif
 @stop