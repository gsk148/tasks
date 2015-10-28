@extends('layout')

@section('title')
    Информация о пользователе {!! $user->name !!}
@stop

@section('mainContent')
    @include('partials.flash')
    <h3>Информация о пользователе: {{ $user->name }} {{ $user->last_name }}</h3>
    <table class="table table-bordered">
        <tr>
            <td>Отдел</td>
            <td>{{ App\Http\Helper::getDepartmentName($user->department_id) }}</td>
        </tr>
        <tr>
            <td>Должность</td>
            <td>{{ $user->position }}</td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td><a href="mailto:{{ $user->email }}"> {{ $user->email }}</a></td>
        </tr>
        <tr>
            <td>Текущие задачи</td>
            <td>{!! App\Http\Helper::getUserTasks($user) !!}</td>
        </tr>
    </table>


@stop
