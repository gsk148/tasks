@extends('layout')

@section('mainContent')
    <h1>Страница регистрации пользователей</h1>
    {!! Form::open(['url' => '/auth/register']) !!}

   <!-- name Form input -->
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email','E-Mail:',['class' => 'control-label']) !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>
    
    <!-- password Form input -->
    <div class="form-group">
      {!! Form::label('password', 'Password:') !!}
      {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>

    <!-- password Form input -->
    <div class="form-group">
        {!! Form::label('password_confirmation', 'Confirm password:') !!}
        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
    </div>

    <!-- Register user Form submit -->
    <div class="form-group">
      {!! Form::submit('Register user', ['class' => 'btn btn-primary form-control']) !!}
    </div>

   {!! Form::close() !!}
@stop