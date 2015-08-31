@extends('layout')

@section('title')
    Главная страница приложения
@stop

@section('mainContent')
    <h1>Начальная страница</h1>
    <hr />
     @if (Auth::check())
         <h3>Рады тебя видеть, {!! Auth::user()->name !!}!</h3>
         <h4>Твой email - {!! Auth::user()->email !!} </h4>
         <p><a class="btn btn-warning" href="auth/logout">Выйти</a></p>

     @else
        <div class="alert alert-danger"><h3>Сынок, для начала тебе надо <a href="auth/login ">авторизоваться</a>!</h3></div>
    @endif
@stop
