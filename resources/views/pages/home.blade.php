@extends('layout')

@section('title')
    Главная страница приложения
@stop

@section('mainContent')
    @if (Auth::check())
         {{--<h3>Рады тебя видеть, {!! Auth::user()->name !!}!</h3>--}}
         <h3>Домашняя страница</h3>
         <div class="well">
             <p>Начальная страница</p>
         </div>
     @else
        <h2>Начальная страница</h2>
        <hr />
        <div class="well well-sm"><h5>Сынок, для того чтобы начать работу с системой, тебе надо <a href="auth/login "><b>авторизоваться</b></a>!</h5></div>
    @endif
@stop
