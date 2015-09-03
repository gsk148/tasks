@extends('layout')

@section('title')
    Отображение текущих задач
@stop

@section('mainContent')
    <h1>Текущие задачи</h1>
    @if($tasks)
        <table class="table table-bordered">
            <tr>
                <th width="15%">Название</th>
                <th width="45%">Описание</th>
                <th>Инициатор</th>
                <th>Исполнитель</th>
                <th width="10%">Дата создания</th>
            </tr>
        @foreach($tasks as $task)
            <tr>
                <td><a href="task\{{ $task->id }}">{{ $task->title }}</a></td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->mover }}</td>
                <td>{{ $task->implementer }}</td>
                <td>{{ DATE_FORMAT($task->created_at,"d.m.y") }}</td>
            </tr>
        @endforeach
        </table>
    @else
        <h3>В данный момент нет задач!</h3>
    @endif
 @stop