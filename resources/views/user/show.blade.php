@extends('layout')

@section('title')
    Информация о пользователе {!! $user->name !!}
@stop

@section('mainContent')
    <h3>Информация о пользователе {!! $user->name !!}</h3>
@stop
