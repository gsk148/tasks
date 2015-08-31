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
                    <th>E-mail</th>
                    <th>Время создания</th>
                </tr>
        @foreach($users as $user)
                <tr>
                    <td>{!! $user->name !!}</td>
                    <td>{!! $user->email !!}</td>
                    <td>{!! $user->created_at !!}</td>
                </tr>
        @endforeach
        </table>
    @else
        <p>Нет активных пользователей</p>
    @endif

@stop
