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
                <td>{!!   App\Http\Helper::getEmployers($task->id, 'task_mover', 'primary')  !!}</td>
            </tr>
            <tr>
                <td><b>Владелец / Владельцы процесса:</b></td>
                <td>{!!   App\Http\Helper::getEmployers($task->id, 'task_owner', 'default')  !!}</td>
            </tr>
            <tr>
                <td><b>Исполнители:</b></td>
                <td>{!!   App\Http\Helper::getEmployers($task->id, 'task_implementer', 'default')  !!}</td>
            </tr>
            <tr>
                <td><b>Куратор проекта</b></td>
                <td>{!!   App\Http\Helper::getEmployers($task->id, 'task_supervisor', 'info')  !!}  </td>
            </tr>
            <tr>
                <td><b>Статус проекта</b></td>
                <td>{!!  $task->is_active !!}</td>
            </tr>
        </table>
        <div class="col-sm-3"><a class="btn btn-info" href="/task/{!! $task->id !!}/edit">Редактировать задачу</a></div>
        <div class="col-sm-3">
            {!! Form::model($task, ['method' => 'DELETE', 'action' => ['TaskController@destroy',$task->id ]] ) !!}
            <div class="form-group">
                {!! Form::submit('Удалить задачу', ['class' => 'btn btn-danger form-control']) !!}
            </div>
            {!! Form::close() !!}
        </div>
@stop
