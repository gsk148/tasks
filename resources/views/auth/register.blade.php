@extends('layout')

@section('mainContent')
    <h1>Страница регистрации пользователей</h1>
    @include('errors.list')
    {!! Form::open(['url' => '/auth/register']) !!}

    @include('user.form')

    <!-- Register user Form submit -->
    <div class="form-group">
      {!! Form::submit('Зарегистрироваться', ['class' => 'btn btn-primary form-control']) !!}
    </div>

   {!! Form::close() !!}

@stop