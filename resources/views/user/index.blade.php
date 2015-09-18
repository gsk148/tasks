@extends('layout')

@section('title')
   Список пользователей системы
@stop

@section('mainContent')
    <h1>Список пользователей системы</h1>
    @if($users)
        <table class="table table-bordered table-hover">
                <tr>
                    <th>Имя</th>
                    <th>Подразделение</th>
                    <th>Должность</th>
                    <th>E-mail</th>
                </tr>
        @foreach($users as $user)
                <tr>
                    <td>{!! $user->name !!} {!! $user->last_name !!} </td>
                    <td>{!! $user->department !!}</td>
                    <td>{!! $user->position !!}</td>
                    <td>{!! $user->email !!}</td>
                </tr>
        @endforeach
        </table>
    @else
        <p>Нет активных пользователей</p>
    @endif

@stop
