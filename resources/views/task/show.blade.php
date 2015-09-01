@extends('layout')

@section('title')
    Отображение текущий задачи
@stop

@section('mainContent')
        <h2>Информация по задаче</h2>
        <table class="table table-bordered table-hover">
            <tr>
                <td><b>Название</b></td>
                <td>{!! $task->title !!}</td>
            </tr>
            <tr>
                <td><b>Описание задачи</b></td>
                <td>{!! $task->description !!}</td>
            </tr>
            <tr>
                <td><b>Инициатор / Инициаторы</b></td>
                <td>{!! $task->mover !!}</td>
            </tr>
            <tr>
                <td><b>Владелец / Владельцы процесса:</b></td>
                <td>{!! $task->owner !!}</td>
            </tr>
            <tr>
                <td><b>Исполнители:</b></td>
                <td>{!! $task->implementer !!}</td>
            </tr>
            <tr>
                <td><b>Куратор проекта</b></td>
                <td>{!! $task->title !!}</td>
            </tr>
        </table>
        <div><a class="btn btn-info" href="/task/{!! $task->id !!}/edit">Редактировать задачу</a></div>
@stop
