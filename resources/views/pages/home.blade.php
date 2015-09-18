@extends('layout')

@section('title')
    Главная страница приложения
@stop

@section('mainContent')
    <h2>Начальная страница</h2>
    <hr />
     @if (Auth::check())
         <h3>Рады тебя видеть, {!! Auth::user()->name !!}!</h3>
         <div class="list-group col-md-6">
             <a href="/my-tasks" class="list-group-item">My tasks</a>
             <a href="/task/create" class="list-group-item">Create new task</a>
             <a href="/task/edit" class="list-group-item">Edit task</a>
         </div>
     @else
        <div class="well well-sm"><h5>Сынок, для того чтобы начать работу с системой, тебе надо <a href="auth/login "><b>авторизоваться</b></a>!</h5></div>
    @endif
@stop
