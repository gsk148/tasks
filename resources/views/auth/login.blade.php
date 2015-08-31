@extends('layout')

@section('mainContent')
    <h1>Авторизация пользователей</h1>
{!! Form::open(['url' => '/auth/login']) !!}
    <div class="form-group">
        {!! Form::label('email','E-Mail:',['class' => 'control-label']) !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password','Пароль:',['class' => 'control-label']) !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('remember','Запомнить:',['class' => 'control-label']) !!}
        {!! Form::checkbox('remember', null) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Войти', ['class' => 'btn btn-primary']) !!}
    </div>
{!! Form::close() !!}
@stop