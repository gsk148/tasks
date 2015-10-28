@extends('layout')

@section('mainContent')
  <h2>Добавление нового пользователя</h2>
    @include('errors.list')
    {!!  Form::open(['route' => 'user.store']) !!}
        @include('user.form')
        <div class="form-group">
          {!! Form::submit('Добавить пользователя', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
@endsection



@stop